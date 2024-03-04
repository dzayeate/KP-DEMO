<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\SuratJalan;
use Dompdf\Dompdf;

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

        foreach($suratJalan->transfer->barangTransfer as $item){
            $barang = Barang::find($item->barang_id);
            $barang->gudang_id = $suratJalan->transfer->gudang_tujuan_id;
            $barang->update();
    }

        return redirect()->route('warehouse.surat-jalan.index');
    }

    public function batalStatus($id)
    {
        $suratJalan = SuratJalan::find($id);
        $suratJalan->status = 'Batal';
        $suratJalan->save();


        foreach($suratJalan->transfer->barangTransfer as $item){
                $barang = Barang::find($item->barang_id);
                $barang->gudang_id = $suratJalan->transfer->gudang_asal_id;
                $barang->update();
        }

        return redirect()->route('warehouse.surat-jalan.index');
    }

    public function cetak_surat_jalan($id)
    {
        $suratJalan = SuratJalan::find($id);
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('warehouse.surat-jalan.surat-jalan-pdf', compact('suratJalan')));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream('suratJalan' . $suratJalan->no_surat_jalan . '.pdf', array("Attachment" => false));
    }
    
}
