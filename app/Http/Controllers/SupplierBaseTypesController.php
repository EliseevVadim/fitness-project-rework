<?php

namespace App\Http\Controllers;

use App\Models\SupplierBaseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierBaseTypesController extends Controller
{
    public function showAll()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBaseTypes = SupplierBaseType::all();
        return view('admin.dashboard.supplierBaseType.supplierBaseTypeList', compact('supplierBaseTypes'));
    }

    public function openAddingForm()
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        return view('admin.dashboard.supplierBaseType.supplierBaseTypeAdd');
    }

    public function addSupplierBaseType(Request $request)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $input = $request->validate([
            'name' => 'required'
        ]);
        SupplierBaseType::create($input);
        return redirect()->route('showAllSupplierBaseTypes');
    }

    public function openSupplierBaseTypeEditingPage($id)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBaseType = SupplierBaseType::find($id);
        return view('admin.dashboard.supplierBaseType.supplierBaseTypeEdit', compact('supplierBaseType'));
    }

    public function editSupplierBaseType(Request $request, $id)
    {
        if(is_null(Auth::guard('admin')->user()))
            abort(401);
        $supplierBaseType = SupplierBaseType::find($id);
        $input = $request->validate([
            'name' => 'required'
        ]);
        $supplierBaseType->update($input);
        return redirect()->route('showAllSupplierBaseTypes');
    }

    public function deleteSupplierBaseType($id)
    {
        SupplierBaseType::destroy($id);
    }
}
