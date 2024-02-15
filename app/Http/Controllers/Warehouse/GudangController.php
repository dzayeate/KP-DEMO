<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        $data = Gudang::all();
        return view('warehouse.gudang.index', compact('data'));
    }

    public function add()
    {
        return view('warehouse.gudang.add');
    }

    public function store(Request $request)
    {
        $data = new Gudang();
        $data->kode_gudang = $request->kode_gudang;
        $data->nama_gudang = $request->nama_gudang;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('warehouse.gudang.index');
    }



    public function edit($id)
    {
        $data = Gudang::find($id);
        return view('warehouse.gudang.edit', compact('data'));
    }

    public function update($id, Request $request)
    {
        $data = Gudang::find($id);
        $data->kode_gudang = $request->kode_gudang;
        $data->nama_gudang = $request->nama_gudang;
        $data->status = $request->status;
        $data->update();
        return redirect()->route('warehouse.gudang.index');
    }

    public function detail($id)
    {
        $data = Gudang::find($id);
        return view('warehouse.gudang.detail', compact('data'));
    }

    public function delete($id)
    {
        $data = Gudang::find($id);
        $data->delete();
        return back();
    }
}
