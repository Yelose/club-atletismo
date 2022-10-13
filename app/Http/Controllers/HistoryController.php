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
        $quiens = Quien::first(); 
        $cronologias = Cronologia::first();
        return view("history", compact("quiens", "cronologias"));
    }

    function render(){
        $keyWord = '%' . $this->keyWord . '%';
        return view('history.cronologia.index', [
            'quien' => Cronologia::latest()
            ->orWhere('fecha', 'LIKE', $keyWord)
            ->orWhere('resumen', 'LIKE', $keyWord)
        ]);
    }
}
