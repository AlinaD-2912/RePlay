<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'etat',
        'quantite',
        'type',
        'prix',
        'classification-par-age',
        'promotion_prix',
        'is_promotion',
        'is_active',
        'image'
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
