<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'opened_date',
        'user_id',
        'image',
        'phone',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
