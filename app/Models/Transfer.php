<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_bukti',
        'tanggal',
        'gudang_asal_id',
        'gudang_tujuan_id',
    ];

    public function gudangAsal()
    {
        return $this->belongsTo(Gudang::class, 'gudang_asal_id');
    }

    public function gudangTujuan()
    {
        return $this->belongsTo(Gudang::class, 'gudang_tujuan_id');
    }

    public function barangTransfer()
    {
        return $this->hasMany(TransferItem::class);
    }
}
