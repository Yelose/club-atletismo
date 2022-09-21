<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticia;

class NewsController extends Controller
{
    public function news()
    {
        $noticias = noticia::all();
        return view("news", compact("noticias"));
    }
}
