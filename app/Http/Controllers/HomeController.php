<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    //

    public function index()
    {
        $page = "Hello from Home Controller";
        return view('pages.home', compact('page'));
    }
}
