<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;

    public function quarters()
    {
        return $this->hasMany(Quarter::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
