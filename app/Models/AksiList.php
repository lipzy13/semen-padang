<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AksiList extends Model
{
    public $timestamps = false;

    public function basicMaintenances () : BelongsTo
    {
        return $this->belongsTo('basicMaintenance');
    }
}
