<?php

namespace App\Http\Controllers;

use App\Core\AuthorizationMailer;
use App\Models\AccessHistory;
use App\Models\ActivityCalendar;
use App\Models\FoodCalendar;
use App\Models\Menu;
use App\Models\PersonalAccount;
use App\Models\ProgramContent;
use App\Models\Training;
use App\Models\TrainingUser;
use App\Models\User;
use App\Models\UserMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Core\Tinkoff;

class CheckoutsController extends Controller
{
    public function prepareStripeCheckoutPage(Request $request)
    {
        $userInfo = json_decode($request->user_info);
        Session::put('user_info', $userInfo);
    }

    public function generateStripeCheckoutPage()
    {
        $userInfo = Session::get('user_info');
        if (is_null($userInfo))
            abort(404);
        $user = User::where('email', $userInfo->email)->first();
        $password = Str::random(12);
        if (is_null($user)) {
            $user = User::create([
                'name' => $userInfo->name,
                'email' => $userInfo->email,
                'password' => Hash::make($password)
            ]);
        }
        $checkout = $user->checkout($userInfo->stripe_id, [
            'success_url' => route('checkout-finish'),
            'cancel_url' => route('cancel-checkout')
        ]);
        return view('checkouts.stripe_page', [
            'checkout' => $checkout,
            'userInfo' => $userInfo
        ]);
    }

    public function prepareTinkoffCheckout(Request $request)
    {
        $userInfo = json_decode($request->user_info);
        Session::put('user_info', $userInfo);
        $tinkoff = new Tinkoff(
            config('app.tinkoff_api_url'),
            config('app.tinkoff_terminal'),
            config('app.tinkoff_secret')
        );
        $payment = [
            'OrderId' => random_int(1, 1000000),
            'SuccessURL' => config('app.tinkoff_success_url'),
            'FailURL' => config('app.tinkoff_fail_url'),
            'Amount' => $userInfo->price,
            'Language' => 'ru',
            'Description' => $userInfo->product_name,
            'Email' => $userInfo->email,
            'Phone' => '1234567890',
            'Name' => $userInfo->name,
            'Taxation' => 'usn_income'
        ];
        $item[] = [
            'Name' => $userInfo->product_name,
            'Price' => $userInfo->price,
            'NDS' => 'vat20',
            'Quantity' => 1
        ];
        $paymentUrl = $tinkoff->paymentURL($payment, $item);
        if (!$paymentUrl)
            dd($tinkoff->error);
        $paymentId = $tinkoff->payment_id;
        Session::put('tinkoff_id', $paymentId);
        return response()->json([
            'paymentUrl' => $paymentUrl
        ]);
    }

    public function finishStripeCheckout()
    {
        $userInfo = Session::get('user_info');
        if (is_null($userInfo))
            abort(404);
        $user = User::where('email', $userInfo->email)->first();
        $personalAccount = PersonalAccount::where('user_id', $user->id);
        if (is_null($personalAccount))
            $user->delete();
        $this->createUserAccount($userInfo);
        return view('thanks');
    }

    public function finishTinkoffCheckout()
    {
        $paymentId = Session::get('tinkoff_id');
        $this->checkPaymentState($paymentId);
        $userInfo = Session::get('user_info');
        Session::remove('tinkoff_id');
        $this->createUserAccount($userInfo);
        return view('thanks');
    }

    public function cancelCheckout()
    {
        return view('paymentFailure');
    }

    public function createUserAccount($userInfo)
    {
        $programContent = ProgramContent::where('training_location_id', $userInfo->training_location_id)
            ->where('menu_calories_id', $userInfo->menu_calories_id)
            ->first();
        if (is_null($programContent))
            abort(404);
        $password = Str::random(12);
        $user = User::where('email', $userInfo->email)->first();
        if (is_null($user)) {
            $user = User::create([
                'name' => $userInfo->name,
                'email' => $userInfo->email,
                'password' => Hash::make($password)
            ]);
        }
        (new AuthorizationMailer())->sendAuthorizationMessage($user->email, $programContent->name, $programContent->google_drive_link);
        $personalAccount = PersonalAccount::create([
            'user_id' => $user->id,
            'age' => $userInfo->age,
            'life_style_id' => $userInfo->life_style_id,
            'training_location_id' => $userInfo->training_location_id,
            'menu_calories_id' => $userInfo->menu_calories_id
        ]);
        Session::remove('user_info');
    }

    private function checkPaymentState($paymentId)
    {
        $tinkoff = new Tinkoff(
            config('app.tinkoff_api_url'),
            config('app.tinkoff_terminal'),
            config('app.tinkoff_secret')
        );
        $status = $tinkoff->getState($paymentId);
        if ($status != "CONFIRMED")
            abort(404);
    }
}
