<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class pic_workorder extends Model
{
    protected $fillable = [
        'nama',
        'work_order_id'
    ];

    public function workOrder() : HasMany
    {
        return $this->hasMany(workOrder::class);
    }
}
