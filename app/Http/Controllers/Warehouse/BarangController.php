<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index()
    {
        return view('warehouse.barang.index');
    }
}
