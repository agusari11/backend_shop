<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'image'
    ];

    public function getImageAttribute($value)
    {
        return asset('/storage/categories/' . $value);
    }


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
