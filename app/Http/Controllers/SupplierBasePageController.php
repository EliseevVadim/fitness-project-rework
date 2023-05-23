<?php

namespace App\Http\Controllers;

use App\Models\SupplierBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SupplierBasePageController extends Controller
{
    public function index()
    {
        $supplierBases = SupplierBase::all();
        return view('supplierBase', compact('supplierBases'));
    }


    public function supplierBaseSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'base_type_id' => 'required|integer',
        ]);

        $response = Http::post('/initialize-checkout/tinkoff-for-base', [
            "email" => $request->email,
            "id" => $request->base_type_id
        ]);

        $paymentUrl = $response->json()['paymentUrl'];

        return redirect($paymentUrl);
    }
}
