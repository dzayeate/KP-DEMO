<?php

namespace App\Http\Controllers\Warehouse;
use App\Models\Barang;
use App\Models\Gudang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('warehouse.barang.index', compact('data'));
    }

    public function add()
    {
        $gudang = Gudang::all();
        return view('warehouse.barang.add', compact('gudang'));
    }

    public function tambah(Request $request)
    {
        $barang = new Barang();
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->stock = $request->stock;
        $barang->satuan = $request->satuan;
        $barang->status = $request->status;
        $barang->keterangan = $request->keterangan;
        $barang->gudang_id = $request->gudang_id;
        $barang->save();
        return redirect()->route('warehouse.barang.index');
    }

    public function edit($id)
    {
        $data = Barang::find($id);
        return view('warehouse.barang.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_barang = $request->jenis_barang;
        $barang->stock = $request->stock;
        $barang->satuan = $request->satuan;
        $barang->status = $request->status;
        $barang->gudang_id = $request->gudang_id;
        $barang->keterangan = $request->keterangan;
        $barang->update();
        return redirect()->route('warehouse.barang.index');
    }

    public function detail($id)
    {
        $data = Barang::find($id);
        return view('warehouse.barang.detail', compact('data'));
    }

    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('warehouse.barang.index');
    }

}
