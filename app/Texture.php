<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texture extends Model
{
    //
    protected $fillable = [
        'texture',
    ];

    public function texturePath()
    {
        return str_replace(' ', '-', $this->texture);
    }

    public function getRouteKeyName()
    {
        return 'texture';
    }

    public function resolveRouteBinding($value)
    {
        return $this->where('texture', str_replace('-', ' ', $value))->firstOrFail();
    }

}
