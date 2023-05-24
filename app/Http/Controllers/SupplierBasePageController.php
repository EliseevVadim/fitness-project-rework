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
}
