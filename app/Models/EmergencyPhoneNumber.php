<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmergencyPhoneNumber extends Model
{
    use HasFactory;
    protected $fillable = [
        'fio', 'role', 'phone_number', 'quarter_id'
    ];
}