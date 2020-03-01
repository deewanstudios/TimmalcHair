<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Length extends Model
{
    //
    protected $fillable = [
        'length',
    ];

    public function price()
    {
        return $this->hasOne(Price::class, 'id', 'price_id');

    }
}
