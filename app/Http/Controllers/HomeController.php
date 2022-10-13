<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;
use App\Models\Sponsor;
use App\Models\Testimony;

class HomeController extends Controller
{

    public function home()

    {
        $noticias = DB::table('noticias')->take(12)->get();

        $testimonies = Testimony::all();
        $sponsors = Sponsor::all();
        return view('home', compact("noticias", "sponsors", "testimonies"));
    }
}
