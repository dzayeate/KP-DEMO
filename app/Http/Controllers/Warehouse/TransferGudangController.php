<?php

namespace App\Http\Controllers\Warehouse;
use App\Models\Transfer;
use App\Models\TransferItem;
use App\Models\Gudang;
use App\Models\Barang;
use App\Models\SuratJalan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransferGudangController extends Controller
{
    public function index()
    {
        $transfer = Transfer::with('barangTransfer.barang')->get();
        return view('warehouse.transfer-gudang.index', compact('transfer'));
    }

    public function add()
    {
        $gudang = Gudang::all();
        $lastTrans = Transfer::latest()->first();
        //auto generate no bukti
        if(!$lastTrans){
            $no_bukti = 'TRF-'.date('Ymd').'001';
        }else{
            $angkaterakhir = (int)substr($lastTrans->no_bukti, 11) + 1;
            $no_bukti = 'TRF-'.date('Ymd').str_pad($angkaterakhir, 3, '0', STR_PAD_LEFT);
        }
        return view('warehouse.transfer-gudang.add', compact('gudang','no_bukti'));
    }

    public function tambah(Request $request)
    {
        $trans = new Transfer();
        $trans->no_bukti = $request->no_bukti;
        $trans->tanggal = $request->tanggal;
        $trans->gudang_asal_id = $request->gudang_asal_id;
        $trans->gudang_tujuan_id = $request->gudang_tujuan_id;
        $trans->keterangan = $request->keterangan;
        $trans->save();

         // Simpan setiap item transfer
    $barangIds = $request->input('barang_ids', []);
    if (!empty($barangIds)) {
        foreach ($barangIds as $barangId) {
                $trans_item = new TransferItem();
                $trans_item->transfer_id = $trans->id;
                $trans_item->barang_id = $barangId;
                $trans_item->save();
            
        }
    }

    //pindahkan barang dari gudang asal ke gudang tujuan
    $gudangTujuan = Gudang::find($request->gudang_tujuan_id);
    foreach ($barangIds as $barangId) {
        $barang = Barang::find($barangId);
        $barang->gudang_id = $gudangTujuan->id;
        $barang->update();
    }

    //tambahkan surat jalan
    $suratTerakhir = SuratJalan::latest()->first();
    if(!$suratTerakhir){
        $no_surat_jalan = 'SJ-'.date('Ymd').'001';
    }else{
        $angkaterakhir = (int)substr($suratTerakhir->no_surat_jalan, 11) + 1;
        $no_surat_jalan = 'SJ-'.date('Ymd').str_pad($angkaterakhir, 3, '0', STR_PAD_LEFT);
    }
    $surat_jalan = new SuratJalan();
    $surat_jalan->no_surat_jalan = $no_surat_jalan;
    $surat_jalan->no_bukti_transfer_gudang = $request->no_bukti;
    $surat_jalan->save();

        return redirect()->route('warehouse.transfer-gudang.index');
    }

    public function edit()
    {
        return view('warehouse.transfer-gudang.edit');
    }

    public function detail()
    {
        return view('warehouse.transfer-gudang.detail');
    }

    public function getBarangGudang($id)
    {
        $barang = Barang::where('gudang_id', $id)->get();
        return response()->json($barang);
    }

}
