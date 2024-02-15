<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jenis_barang',
        'stock',
        'satuan',
        'status',
        'keterangan'
    ];

    public function gudang()
    {
        return $this->belongsTo(Gudang::class);
    }
}
