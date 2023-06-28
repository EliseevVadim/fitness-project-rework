<?php

namespace App\Http\Controllers;

use App\Models\SupplierBaseCustomer;
use Illuminate\Support\Facades\Auth;

class SupplierBaseCustomerController extends Controller
{
    public function showAll()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $customers = SupplierBaseCustomer::all();
        return view('admin.dashboard.supplierBaseCustomer.supplierBaseCustomerList',
            compact('customers'));
    }
}
