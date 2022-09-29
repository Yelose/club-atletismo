<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticia;

class NewsController extends Controller
{
    public function news()
    {
        $noticias = noticia::paginate(20);
        return view("news", compact("noticias"));
    }
    public function noticia($noticia)
    {
        $noticia = noticia::findOrFail($noticia);
        return view('components.noticias.detail', ['noticia' => $noticia]);
    }
}
