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

}
