<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AksiList extends Model
{
    protected $fillable = [
        'basic_maintenance_id',
        'aksi_id',
        'alat_id'
    ];
    public $timestamps = false;

    public function basicMaintenances () : BelongsTo
    {
        return $this->belongsTo('basicMaintenance');
    }
    public function alat() : BelongsTo
    {
        return $this->belongsTo('alat');
    }
}
