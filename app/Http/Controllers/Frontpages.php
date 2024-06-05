<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "Healet";
        return view('home', compact('title'));
    }

    public function about(){
        $title = "About";
        return view('about', compact('title'));
    }
    public function shop(){
        $title = "Shop";
        return view('shop', compact('title'));
    }
    public function blog(){
        $title = "Blog";
        return view('blog', compact('title'));
    }
}
