<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{

    protected $fillable = ['nama_area'];


    public function basicMaintenance() : HasMany
    {
        return $this->hasMany('basicMaintenance');
    }
}
