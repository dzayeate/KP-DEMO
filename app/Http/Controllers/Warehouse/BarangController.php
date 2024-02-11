<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    public function index()
    {
        return view('warehouse.barang.index');
    }

    public function add()
    {
        return view('warehouse.barang.add');
    }

    public function edit()
    {
        return view('warehouse.barang.edit');
    }

    public function detail()
    {
        return view('warehouse.barang.detail');
    }

}
