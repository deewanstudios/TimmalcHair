<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //

    public function imagePath()
    {
        return $this->url;
    }

    /**
     * Product
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
