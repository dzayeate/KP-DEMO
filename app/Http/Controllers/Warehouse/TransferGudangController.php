<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;

class TransferGudangController extends Controller
{
    public function index()
    {
        return view('warehouse.transfer-gudang.index');
    }

    public function add()
    {
        return view('warehouse.transfer-gudang.add');
    }

    public function edit()
    {
        return view('warehouse.transfer-gudang.edit');
    }

    public function detail()
    {
        return view('warehouse.transfer-gudang.detail');
    }

}
