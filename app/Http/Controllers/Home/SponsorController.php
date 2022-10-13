<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{

    public function render()
    {
        return view('components.home.sponsors', [
            'sponsors' => Sponsor::latest()
        ]);
    }
}
