<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class workOrder extends Model
{
    protected $fillable = [
        'area_id',
        'route_id',
        'pic',
        'tanggal',
        'kode_alat',
        'abnormalitas',
        'action',
        'kondisi',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
