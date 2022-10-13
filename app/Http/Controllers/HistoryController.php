<?php
namespace App\Http\Controllers;

use App\Models\Quien;
use App\Models\Cronologia;
use Psy\Command\HistoryCommand;

use Illuminate\Http\Request;
class HistoryController extends Controller
{
    public $selected_id, $keyWord, $titulo, $image, $resumen;
    public $updateMode = false;
    
    public function history()
    {
        // Aquí usamos el modelo "Quien"
        $quiens = Quien::first(); 
        return view("history", compact("quiens"));
    }

    function render(){
        $keyWord = '%' . $this->keyWord . '%';
        return view('history.cronologia.index', [
            'quien' => Quien::latest()
            ->orWhere('titulo', 'LIKE', $keyWord)
            ->orWhere('imagen', 'LIKE', $keyWord)
            ->orWhere('resumen', 'LIKE', $keyWord)
        ]);
    }
    public function cronologia($cronologia)
    {
        $cronologia = cronologia::findOrFail($cronologia);
        return view('history.cronologia.index', ['cronologia' => $cronologia]);
    }
}
