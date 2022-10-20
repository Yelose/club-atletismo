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
        $noticias = Noticia::paginate(10);
        return view("news", compact("noticias"));
    }
    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('noticias.index', [
            'noticias' => Noticia::latest()
                ->orWhere('titular', 'LIKE', $keyWord)
                ->orWhere('imagen', 'LIKE', $keyWord)
                ->orWhere('piefoto', 'LIKE', $keyWord)
                ->orWhere('subtitulo', 'LIKE', $keyWord)
                ->orWhere('noticia', 'LIKE', $keyWord)
                ->orWhere('fecha', 'LIKE', $keyWord)
                ->paginate(10),
        ]);
    }
    public function noticia($noticia)
    {
        $noticia = Noticia::findOrFail($noticia);
        return view('components.noticias.detail', ['noticia' => $noticia]);
    }
}
