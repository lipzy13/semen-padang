<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pic extends Model
{
    protected $fillable = [
        'nama',
        'basic_maintenances_id'
    ];

    public function basicMaintenance() : HasMany
    {
        return $this->hasMany(basicMaintenance::class);
    }
}
