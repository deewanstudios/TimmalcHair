<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'category',
    ];

    public function path()
    {
        return str_replace(' ', '-', $this->category);
    }

    public function getRouteKeyName()
    {
        return 'category';
    }

    public function resolveRouteBinding($value)
    {
        return $this->where('category', str_replace('-', ' ', $value))->firstOrFail();
    }

}
