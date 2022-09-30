<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use Livewire\WithPagination;

class NewsController extends Controller
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $titular, $piefoto, $imagen, $subtitulo, $noticia, $fecha;
    public $updateMode = false;

    public function news()
    {
        $noticias = Noticia::paginate(20);
        return view("news", compact("noticias"));
    }
    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('noticias.index', [
            'noticias' => noticia::latest()
                ->orWhere('titular', 'LIKE', $keyWord)
                ->orWhere('imagen', 'LIKE', $keyWord)
                ->orWhere('piefoto', 'LIKE', $keyWord)
                ->orWhere('subtitulo', 'LIKE', $keyWord)
                ->orWhere('noticia', 'LIKE', $keyWord)
                ->orWhere('fecha', 'LIKE', $keyWord)
                ->paginate(10),
        ]);
    }
}
