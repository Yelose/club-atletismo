<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticia;

class HomeController extends Controller
{

    public function home()
    {
        $noticias = noticia::all();
        $sponsors= Sponsor::all();
        return view('home', compact("noticias", "sponsors"));
    }
}
