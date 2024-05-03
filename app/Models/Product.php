<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
    // $table->foreignId('brand_id')->constrained('brands')->cascadeOnDelete();
    // $table->string('name');
    // $table->string('slug')->unique();
    // $table->json('image')->nullable();
    // $table->longText('description')->nullable();
    // $table->decimal('price', 10,2);
    // $table->boolean('is_active')->default(true);
    // $table->boolean('is_featured')->default(false);
    // $table->boolean('in_stock')->default(true);
    // $table->boolean('on_sale')->default(false);

    protected $fillable = ['category_id', 'brand_id', 'name', 'slug', 'image', 'description', 'price', 'is_active', 'is_featured', 'in_stock', 'on_sale'];

    protected $casts = [
        'image' => 'array',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
