<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NewsController extends Controller
{
    protected $paginationTheme = 'bootstrap';

    public function news()
    {
        $noticias = Noticia::paginate(20);
        return view("news", compact("noticias"));
    }
    public function noticia($noticia)
    {
        $noticia = Noticia::findOrFail($noticia);
        return view('components.noticias.detail', ['noticia' => $noticia]);
    }
}
