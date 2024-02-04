<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class basicMaintenance extends Model
{
    protected $fillable = [
        'area_id',
        'route_id',
        'tanggal',
        'alat_id',
        'abnormalitas',
        'aksilist_id',
        'kondisi',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function area () : BelongsTo {
        return $this->belongsTo(Area::class);
    }

    public function alat () : BelongsTo {
        return $this->belongsTo(Alat::class);
    }
    public function route() : BelongsTo {
        return $this->belongsTo(Route::class);
    }

    public function aksiList() : HasOne {
        return $this->hasOne(AksiList::class);
    }
    public function pic() : HasMany {
        return $this->hasMany(Pic::class);
    }
}
