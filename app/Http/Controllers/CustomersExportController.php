<?php

namespace App\Http\Controllers;

use App\Models\SupplierBase;
use App\Models\SupplierBaseCustomer;
use App\Models\TrainingLocation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CustomersExportController extends Controller
{
    public function openExportPage()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $trainingLocations = TrainingLocation::all();
        $supplierBases = SupplierBase::all();
        return view('admin.dashboard.notification.notificationList',
            compact('trainingLocations', 'supplierBases'));
    }

    public function loadAllBasesCustomers()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $customers = SupplierBaseCustomer::select('email')
            ->distinct()
            ->get();
        return (new Collection($customers))->downloadExcel('customers.xlsx');
    }

    public function loadSpecificBasesCustomers(Request $request)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $customers = SupplierBaseCustomer::select('email')
            ->where('supplier_base_id', $request['supplierBaseId'])
            ->distinct()
            ->get();
        return (new Collection($customers))->downloadExcel('customers.xlsx');
    }

    public function loadAllFitnessCustomers()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $customers = User::select('email')
            ->distinct()
            ->get();
        return (new Collection($customers))->downloadExcel('customers.xlsx');
    }

    public function loadSpecificFitnessCustomers(Request $request)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $customers = User::select('email')
            ->join('personal_accounts', 'users.id', '=', 'personal_accounts.user_id')
            ->where('training_location_id', $request['trainingLocationId'])
            ->distinct()
            ->get();
        return (new Collection($customers))->downloadExcel('customers.xlsx');
    }
}
