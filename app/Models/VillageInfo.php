<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillageInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'quarter_id',
        'what_reasons',
        'working_hours',
        'additional_information',
        'main_email',
        'phone',
        'map_location',
        'population',
        'youth',
        'retailers',
        'schools',
        'kindergartens',
        'mosques',
        'shops',
        'hospital',
        'other_services',
        'video1',
        'video1_image_cover',
        'video2',
        'video2_image_cover',
    ];

    public function quarter()
    {
        return $this->belongsTo(Quarter::class);
    }
    
}
