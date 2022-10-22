<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use App\Models\Testimony;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $selected_id, $keyWord, $name, $text;

    public $updateMode = false;
    public function home()
    {
        $noticias = DB::table('noticias')->take(12)->get();
        $testimonials = Testimony::all();
        $sponsors = Sponsor::all();
        return view('home', compact("noticias", "sponsors", "testimonials"));
    }

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('components.home.testimonials', [
            'testimonials' => Testimony::latest()
            ->orWhere('name', 'LIKE', $keyWord)
            ->orWhere('text', 'LIKE', $keyWord)
        ]);
    }
}
