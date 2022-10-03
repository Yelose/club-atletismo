<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class HomeController extends Controller
{

    public function home()
    {
        $noticias = Noticia::all();

        return view('home', compact("noticias"));
    }
}
