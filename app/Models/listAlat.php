<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class listAlat extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'basic_maintenance_id',
        'alat_id',
        'kondisi',
        'abnormalitas'
    ];

    public function basicMaintenances () : BelongsTo
    {
        return $this->belongsTo('basicMaintenance');
    }

    public function kodeAlat () : belongsTo
    {
        return $this->belongsTo(Alat::class, 'alat_id', 'id');
    }
}
