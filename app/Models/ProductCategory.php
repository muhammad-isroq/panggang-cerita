<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductCategory extends Model
{
    protected $fillable = ['title', 'slug'];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'product_id');
    }
}
