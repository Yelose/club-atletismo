<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\noticia;
use Livewire\WithPagination;

class NoticiasController extends Controller
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $titular, $imagen, $subtitulo, $noticia, $fecha;
    public $updateMode = false;

    public function render()
    {
        $keyWord = '%' . $this->keyWord . '%';
        return view('noticias.index', [
            'noticias' => noticia::latest()
                ->orWhere('titular', 'LIKE', $keyWord)
                ->orWhere('imagen', 'LIKE', $keyWord)
                ->orWhere('subtitulo', 'LIKE', $keyWord)
                ->orWhere('noticia', 'LIKE', $keyWord)
                ->orWhere('fecha', 'LIKE', $keyWord)
                ->paginate(10),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
        $this->titular = null;
        $this->imagen = null;
        $this->subtitulo = null;
        $this->noticia = null;
        $this->fecha = null;
    }

    public function store()
    {

        Noticia::create([
            'titular' => $this->titular,
            'imagen' => $this->imagen,
            'subtitulo' => $this->subtitulo,
            'noticia' => $this->noticia,
            'fecha' => $this->fecha
        ]);

        $this->resetInput();
        $this->emit('closeModal');
        session()->flash('message', 'Noticia Successfully created.');
    }

    public function edit($id)
    {
        $record = Noticia::findOrFail($id);

        $this->selected_id = $id;
        $this->titular = $record->titular;
        $this->imagen = $record->imagen;
        $this->subtitulo = $record->subtitulo;
        $this->noticia = $record->noticia;
        $this->fecha = $record->fecha;

        $this->updateMode = true;
    }

    public function update()
    {

        if ($this->selected_id) {
            $record = Noticia::find($this->selected_id);
            $record->update([
                'titular' => $this->titular,
                'imagen' => $this->imagen,
                'subtitulo' => $this->subtitulo,
                'noticia' => $this->noticia,
                'fecha' => $this->fecha
            ]);

            $this->resetInput();
            $this->updateMode = false;
            session()->flash('message', 'Noticia Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Noticia::where('id', $id);
            $record->delete();
        }
    }
}