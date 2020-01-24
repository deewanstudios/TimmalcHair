<?php

namespace App\Http\Controllers;

class WigsController extends Controller
{
    //

    public function index()
    {
        $page = "Hello from Wigs Controller";
        return view('Pages.wigs', compact('page'));
    }
}
