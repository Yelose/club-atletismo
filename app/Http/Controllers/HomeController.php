<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\noticia;
use App\Models\Sponsor;
use App\Models\Testimony;

class HomeController extends Controller
{

    public function home()
    {
        $noticias = noticia::all();
        $sponsors= Sponsor::all();
        $testimonies= Testimony::all();
        return view('home', compact("noticias", "sponsors", "testimonies"));
    }
}
