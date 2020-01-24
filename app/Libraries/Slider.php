<?php
namespace App\Libraries;

use App\Image;

class Slider
{
    public function getSliderImages()
    {

         return $slides = Image::where(
        [
        ['visibility', '=', 1],
        ['purpose', '=', 'slide'],
        ]
        )
        ->get(['name', 'description', 'caption', 'url']);


        /* $slides = Image::where(
            [
                ['visibility', '=', 1],
                ['purpose', '=', 'slide'],
            ]
        )
            ->get(['name', 'description', 'caption', 'url']);
        // dd($slides);
        // var_dump($slides);
        return $slides; */
    }
}
