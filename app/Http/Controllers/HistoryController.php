<?php

namespace App\Http\Controllers;

use App\Models\Somos;
use Illuminate\Http\Request;
use Psy\Command\HistoryCommand;

class HistoryController extends Controller
{
    public $selected_id, $keyWord, $titulo, $imagen, $resumen;
    public $updateMode = false;
    
    public function history()
    {
        $somos = Somos::all();
        return view("history", compact("somos"));
    }

    function render(){
        $keyWord = '%' . $this->keyWord . '%';
        return view('history.somos.index', [
            'somos' => Somos::latest()
            ->orWhere('titulo', 'LIKE', $keyWord)
            ->orWhere('imagen', 'LIKE', $keyWord)
            ->orWhere('resumen', 'LIKE', $keyWord)
        ]);
}
}
