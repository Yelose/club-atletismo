<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class HomeController extends Controller
{

    public function home()
    {
        $noticias = DB::table('noticias')->take(12)->get();

        return view('home', compact("noticias"));
    }
}
