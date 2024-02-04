<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    public function basicMaintenance() : HasMany
    {
        return $this->hasMany('basicMaintenance');
    }
}
