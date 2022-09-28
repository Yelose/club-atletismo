<?php

namespace App\Http\Controllers;

use App\Models\Somos;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history()
    {
        $Somos = Somos::all();
        return view("history", compact("somos"));

        return view("history");
    }
}
