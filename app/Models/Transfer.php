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
}
