<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public $selected_id, $keyWord, $name, $licence, $image, $category;
    public $updateMode = false;

    public function team()
    {
        $atletas = Team::all();
        $trainers = Trainer::all();
        return view("team", compact("atletas", "trainers"));
    }

    function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('components.atletas.index', [
            'atletas' => Team::latest()
                ->orWhere('name', 'LIKE', $keyWord)
                ->orWhere('licence', 'LIKE', $keyWord)
                ->orWhere('image', 'LIKE', $keyWord)
                ->orWhere('category', 'LIKE', $keyWord)
        ]);
    }
}
