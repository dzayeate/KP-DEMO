<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;

class SuratJalanController extends Controller
{
    public function index()
    {
       return view('warehouse.surat-jalan.index');
    }

    public function add()
    {
        return view('warehouse.surat-jalan.add');
    }

    public function edit()
    {
        return view('warehouse.surat-jalan.edit');
    }
}
