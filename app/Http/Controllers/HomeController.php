<?php

namespace App\Http\Controllers;

use App\Models\ExternalLink;
use Illuminate\Http\Request;
use App\Models\noticia;

class HomeController extends Controller
{

    public function home()

    {
        // $noticias = Noticia::all();
        // return view('home', compact("noticias"));
        // $link = ExternalLink::all();
        return view("home");
    }
}
