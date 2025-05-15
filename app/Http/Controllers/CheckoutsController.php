<?php

namespace App\Http\Controllers;

use App\Core\AuthorizationMailer;
use App\Core\SupplierBaseMailer;
use App\Models\AccessHistory;
use App\Models\ActivityCalendar;
use App\Models\FoodCalendar;
use App\Models\Menu;
use App\Models\PersonalAccount;
use App\Models\ProgramContent;
use App\Models\SupplierBase;
use App\Models\SupplierBaseCustomer;
use App\Models\Training;
use App\Models\TrainingUser;
use App\Models\User;
use App\Models\UserMenu;
use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use App\Core\Tinkoff;

class CheckoutsController extends Controller
{
    private array $productLinkMap = array(
        'КАРМАННЫЙ<br> ДИЕТОЛОГ' => 'https://t.me/goodietsBot',
        'ПРОЕКТ <br>МОДИФИКАЦИЯ' => 'https://t.me/goodietsMBOT',
        'Семейная база' => 'https://t.me/AlexLiubov?text=Хочу СЕМЕЙНУЮ БАЗУ',
        'Бизнес база' => 'https://t.me/AlexLiubov?text=Хочу БИЗНЕС БАЗУ'
    );

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
        $password = Str::random(12);
        $user = User::where('email', $userInfo->email)->first();
        if (is_null($user)) {
            $user = User::create([
                'name' => $userInfo->name,
                'email' => $userInfo->email,
                'password' => Hash::make($password)
            ]);
        }
        $personalAccount = PersonalAccount::create([
            'user_id' => $user->id,
            'age' => $userInfo->age,
            'life_style_id' => $userInfo->life_style_id,
            'training_location_id' => $userInfo->training_location_id,
            'menu_calories_id' => $userInfo->menu_calories_id
        ]);
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
            'NotificationURL' => config('app.tinkoff_notification_url'),
            'Amount' => $userInfo->price,
            'Language' => 'ru',
            'Description' => $userInfo->product_name,
            'Email' => $userInfo->email,
            'Name' => $userInfo->menu_calories_id . "|" . $userInfo->training_location_id . "|" . $userInfo->name,
            'Phone' => '1234567890',
            'Taxation' => 'usn_income'
        ];
        $item[] = [
            'Name' => $userInfo->product_name,
            'Price' => $userInfo->price,
            'NDS' => 'none',
            'Quantity' => 1
        ];
//        $paymentUrl = $tinkoff->paymentURL($payment, $item);
//        if (!$paymentUrl)
//            dd($tinkoff->error);
//        $paymentId = $tinkoff->payment_id;
//        Session::put('tinkoff_id', $paymentId);
        $paymentUrl = $this->productLinkMap[$userInfo->product_name];
        return response()->json([
            'paymentUrl' => $paymentUrl
        ]);
    }

    public function prepareTinkoffCheckoutForBase(Request $request)
    {
        $email = $request->email;
        $id = $request->id;
        $supplierBase = SupplierBase::find($id);
        $userData = (object)[
            'email' => $request->email,
            'id' => $request->id
        ];
        Session::put('user_data', $userData);
        $tinkoff = new Tinkoff(
            config('app.tinkoff_api_url'),
            config('app.tinkoff_terminal'),
            config('app.tinkoff_secret')
        );
        $payment = [
            'OrderId' => random_int(1, 1000000),
            'SuccessURL' => config('app.tinkoff_success_url_for_base'),
            'FailURL' => config('app.tinkoff_fail_url_for_base'),
            'NotificationURL' => config('app.tinkoff_notification_url_for_base'),
            'Amount' => $supplierBase->discount_price,
            'Language' => 'ru',
            'Description' => $supplierBase->name,
            'Email' => $email,
            'Name' => $id,
            'Phone' => '1234567890',
            'Taxation' => 'usn_income'
        ];
        $item[] = [
            'Name' => $supplierBase->name,
            'Price' => $supplierBase->discount_price,
            'NDS' => 'none',
            'Quantity' => 1
        ];
//        $paymentUrl = $tinkoff->paymentURL($payment, $item);
//        if (!$paymentUrl)
//            dd($tinkoff->error);
//        $paymentId = $tinkoff->payment_id;
//        Session::put('tinkoff_id', $paymentId);
        SupplierBaseCustomer::create([
            'email' => $email,
            'supplier_base_id' => $id
        ]);
        $paymentUrl = $this->productLinkMap[$supplierBase->name];
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
        if (!Session::get('service_was_given'))
            $this->provideServiceToUser();
        return view('thanks');
    }

    public function finishTinkoffCheckoutForBase()
    {
        if (!Session::get('base_was_sent'))
            $this->sendBaseToUserBySession();
        return view('supplierBaseThanks');
    }

    public function processTinkoffCheckout(Request $request)
    {
        if ($request->Status != 'CONFIRMED') {
            //Log::info($request->Status);
            return response('OK', 200);
        }
        Session::put('service_was_given', true);
        $contentInfo = explode('|', $request->Data['Name']);
        $caloriesId = $contentInfo[0];
        $locationId = $contentInfo[1];
        $name = $contentInfo[2];
        $userInfo = (object)[
            'name' => $name,
            'menu_calories_id' => $caloriesId,
            'training_location_id' => $locationId,
            'email' => $request->Data['Email']
        ];
        $this->createUserAccount($userInfo);
        return response('OK', 200);
    }

    public function processTinkoffCheckoutForBase(Request $request)
    {
        if ($request->Status != 'CONFIRMED')
            return response('OK', 200);
        $this->sendBaseToUser($request->Data['Email'], $request->Data['Name']);
        Session::put('base_was_sent');
        return response('OK', 200);
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
        (new AuthorizationMailer())->sendAuthorizationMessage($userInfo->email, $programContent->name, $programContent->google_drive_link);
        Session::remove('user_info');
        Session::remove('service_was_given');
    }

    private function checkPaymentState($paymentId)
    {
        $tinkoff = new Tinkoff(
            config('app.tinkoff_api_url'),
            config('app.tinkoff_terminal'),
            config('app.tinkoff_secret')
        );
        $status = $tinkoff->getState($paymentId);
        //Log::info($status);
        if ($status != "CONFIRMED")
            abort(404);
    }

    private function provideServiceToUser()
    {
        $paymentId = Session::get('tinkoff_id');
        $this->checkPaymentState($paymentId);
        $userInfo = Session::get('user_info');
        Session::remove('tinkoff_id');
        $this->createUserAccount($userInfo);
    }

    private function sendBaseToUserBySession()
    {
        $paymentId = Session::get('tinkoff_id');
        $this->checkPaymentState($paymentId);
        $userData = Session::get('user_data');
        Session::remove('tinkoff_id');
        $this->sendBaseToUser($userData->email, $userData->id);
    }

    private function sendBaseToUser($email, $id)
    {
        $supplierBase = SupplierBase::find($id);
        (new SupplierBaseMailer())->sendSupplierBase($email, $supplierBase->base_type_id, $supplierBase->content_link);
        SupplierBaseCustomer::create([
            'email' => $email,
            'supplier_base_id' => $id
        ]);
        Session::remove('user_data');
        Session::remove('base_was_sent');
    }
}
