<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['stock'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    /**
     * @var mixed|string
     */
//    public function formatPrice()
//    {
//        $price = $this->price / 100;
//
//        return number_format($price, 2, ', ', '') . ' €';
//    }
//
//    public function formatPriceFormattedAttribute(): string
//    {
//        $price = $this->price / 100;
//
//        return number_format($price, 2, ', ', '') . ' €';
//    }
//
//    protected function priceFormatted(): Attribute
//    {
//        return Attribute::make(
//            get: fn() => number_format($this->price / 100, 2, ', ', '') . ' €',
//        );
//    }
}
