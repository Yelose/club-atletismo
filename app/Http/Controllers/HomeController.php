<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        // $noticias = Noticia::all();
        // return view('home', compact("noticias"));
        return view("home");
    }
}
