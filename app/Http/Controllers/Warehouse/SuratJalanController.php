<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\SuratJalan;

class SuratJalanController extends Controller
{
    public function index()
    {
        $suratJalan = SuratJalan::all();
        return view('warehouse.surat-jalan.index', compact('suratJalan'));
    }
    

    public function add()
    {
        return view('warehouse.surat-jalan.add');
    }

    public function edit()
    {
        return view('warehouse.surat-jalan.edit');
    }

    public function validStatus($id)
    {
        $suratJalan = SuratJalan::find($id);
        $suratJalan->status = 'Tervalidasi';
        $suratJalan->save();

        return redirect()->route('warehouse.surat-jalan.index');
    }

    public function batalStatus($id)
    {
        $suratJalan = SuratJalan::find($id);
        $suratJalan->status = 'Batal';
        $suratJalan->save();

        return redirect()->route('warehouse.surat-jalan.index');
    }
    
}
