<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function details()
    {
        return $this->hasOne(DetailProduct::class);
    }

    public function tags()
    {
        // return $this->belongsToMany(TagProduct::class, 'tag_products', 'product_id', 'tag_product_id');
        return $this->belongsToMany(Tag::class, 'product_tags');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'product_users');
    }
}
