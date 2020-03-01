<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //

    public function length()
    {
        return $this->belongsTo(Length::class);
    }
}
