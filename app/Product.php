<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'category_id',
        'colour_id',
        'length_id',
        'texture_id',
        'price_id',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function colour()
    {
        return $this->hasOne(Colour::class, 'id', 'colour_id');

    }

    public function texture()
    {
        return $this->hasOne(Texture::class, 'id', 'texture_id');

    }

    public function length()
    {
        return $this->hasOne(Length::class, 'id', 'length_id');

    }

    public function price()
    {
        return $this->hasOne(Price::class, 'id', 'price_id');

    }

    /*  public function productPath()
{
return str_replace(' ', '-', $this->name);
} */

}
