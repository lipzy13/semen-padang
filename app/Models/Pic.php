<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pic extends Model
{
    protected $fillable = [
        'nama',
        'basic_maintenances_id'
    ];
}
