<?php

namespace App\Libraries;

use App\Category;
use App\Page;

class Navigation
{
    //

    public function getAllPages()
    {

        /* return $pages = Page::where('visibility', 1)
        ->get('name', 'url'); */

        return $pages = Page::where('visibility', 1)
            ->get(['name', 'url']);
    }

    /**
     * method to retrieve all sub navigations for pages with child pages.
     */

    public function getCakeCategories()
    {
        return $categories = Category::where('visibility', 1)
            ->get('cake_category');
    }

}
