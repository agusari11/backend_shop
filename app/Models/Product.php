<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'image', 'title', 'slug', 'category_id', 'content', 'weight', 'price', 'discount'
    ];

    public function getImageAttribute($value)
    {
        return asset('/storage/products' . $value);
    }


    public function categrory()
    {
        return $this->belongsTo(Category::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
