<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Team;
use App\Models\Trainer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $noticias = Noticia::all();
        $atletas = Team::all();
        $entrenadores = Trainer::all();
        return view("dashboard", compact("noticias", "atletas", "entrenadores"));
    }
}
