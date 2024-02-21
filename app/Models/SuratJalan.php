<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratJalan extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_surat_jalan',
        'no_bukti_transfer_gudang',
        'status'
    ];
}
