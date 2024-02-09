<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;

class GudangController extends Controller
{
    public function index()
    {
        return view('warehouse.gudang.index');
    }

    public function add()
    {
        return view('warehouse.gudang.add');
    }

    public function edit()
    {
        return view('warehouse.gudang.edit');
    }

    public function detail()
    {
        return view('warehouse.gudang.detail');
    }
}
