<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoVillage extends Model
{
    use HasFactory;


    protected $fillable = [
        'number',
        'territory',
        'workers_count',
        'rooms',
        'condition',
        'about',
        'customers',
        'image',
        'quarter_id',
        'title'
    ];

    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }
}
