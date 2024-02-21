<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_gudang',
        'nama_gudang',
        'status'
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function transferAsal()
    {
        return $this->hasMany(Transfer::class, 'gudang_asal_id');
    }

    public function transferTujuan()
    {
        return $this->hasMany(Transfer::class, 'gudang_tujuan_id');
    }
}
