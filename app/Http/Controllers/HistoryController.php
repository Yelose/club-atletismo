<?php
namespace App\Http\Controllers;

use App\Models\Quien;
use Illuminate\Http\Request;
use Psy\Command\HistoryCommand;

class HistoryController extends Controller
{
    public $selected_id, $keyWord, $titulo, $image, $resumen;
    public $updateMode = false;
    
    public function history()
    {
        $quiens = Quien::all();
        return view("history", compact("quiens"));
    }

    function render(){
        $keyWord = '%' . $this->keyWord . '%';
        return view('history.quien.index', [
            'somos' => Quien::latest()
            ->orWhere('titulo', 'LIKE', $keyWord)
            ->orWhere('imagen', 'LIKE', $keyWord)
            ->orWhere('resumen', 'LIKE', $keyWord)
        ]);
}
}
