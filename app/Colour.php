<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    //
    protected $fillable = [
        'colour',
    ];

    /*  public function product()
{
return $this->belongsTo(Product::class);
} */
}
