<?php

namespace App\Models;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['shop_id', 'name', 'price', 'body', 'quantity', 'image'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
