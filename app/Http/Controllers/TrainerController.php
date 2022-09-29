<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{

    public $selected_id, $name;
    public function trainer () {
        $trainers = Trainer::all();
        return view ("team", compact("trainers"));
    }

    function render(){
        $keyWord = '%' . $this->keyWord . '%';
        return view('team.trainers.index', [
           'trainers' => Trainer::latest()
            ->orWhere('name', 'LIKE', $keyWord)

        ]);
    }
    //
}
