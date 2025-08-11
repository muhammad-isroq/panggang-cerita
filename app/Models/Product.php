<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = ['product_category_id', 'name', 'slug', 'description', 'thumbnail', 'price', 'is_featured', 'is_visible'];

    protected $casts = [
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
        'is_visible' => 'boolean',
    ];

    public function productCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }
}
