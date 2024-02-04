<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aksi extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nama',
    ];
}
