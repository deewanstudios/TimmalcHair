<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
        'name',
        'title',
        'description',
        'keywords',
        'url',
        'visibility',
    ];

    public function path()
    {
        return $this->url;
    }
}
