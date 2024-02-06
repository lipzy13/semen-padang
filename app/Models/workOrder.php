<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function alat () : BelongsTo {
        return $this->belongsTo(Alat::class);
    }
}
