<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'prix',
        'quantite',
        'type',
        'etat',
        'classification-par-age',
        'promotion_prix',
        'is_promotion',
        'image',
        'is_active',
        'category_id',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function carts()
    {
        return $this->belongsToMany(Cart::class, 'cart_product')
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
