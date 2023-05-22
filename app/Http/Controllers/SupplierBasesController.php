<?php

namespace App\Http\Controllers;

use App\Models\SupplierBase;
use App\Models\SupplierBaseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierBasesController extends Controller
{
    public function showAll()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBases = SupplierBase::all();
        return view('admin.dashboard.supplierBase.supplierBaseList', compact('supplierBases'));
    }

    public function openAddingForm()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBaseTypes = SupplierBaseType::all();
        return view('admin.dashboard.supplierBase.supplierBaseAdd', compact('supplierBaseTypes'));
    }

    public function addSupplierBase(Request $request)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $input = $request->validate([
            'name' => 'required',
            'base_type_id' => 'required|integer',
            'price' => 'required|integer',
            'discount_price' => 'required|integer',
            'content_link' => 'required'
        ]);
        SupplierBase::create($input);
        return redirect()->route('showAllSupplierBases');
    }

    public function openSupplierBaseEditingPage($id)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBase = SupplierBase::find($id);
        $supplierBaseTypes = SupplierBaseType::all();
        return view('admin.dashboard.supplierBase.supplierBaseEdit', compact('supplierBaseTypes', 'supplierBase'));
    }

    public function editSupplierBase(Request $request, $id)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBase = SupplierBase::find($id);
        $input = $request->validate([
            'name' => 'required',
            'base_type_id' => 'required|integer',
            'price' => 'required|integer',
            'discount_price' => 'required|integer',
            'content_link' => 'required'
        ]);
        $supplierBase->update($input);
        return redirect()->route('showAllSupplierBases');
    }

    public function deleteSupplierBase($id)
    {
        SupplierBase::destroy($id);
    }
}
