<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class workOrder extends Model
{
    protected $fillable = [
        'tanggal',
        'alat_id',
        'abnormalitas',
        'action',
        'kondisi',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
