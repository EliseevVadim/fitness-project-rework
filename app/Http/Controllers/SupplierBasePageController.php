<?php

namespace App\Http\Controllers;

use App\Models\SupplierBase;
use Illuminate\Http\Request;

class SupplierBasePageController extends Controller
{
    public function index()
    {
        $supplierBases = SupplierBase::all();
        return view('supplierBase', compact('supplierBases'));
    }
}
