<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\View\Components\Noticia as ComponentsNoticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticia::latest()->paginate(15);
        return view('admin.news.index', compact('noticias'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titular' => 'required',
            'imagen' => 'required',
            'piefoto' => 'required',
            'subtitulo' => 'required',
            'noticia' => 'required',
            'fecha' => 'required',
        ]);
        Noticia::create($request->all());
        return redirect()->route('noticias.index')->with('success', 'La noticia se ha creado correctamente.');
    }

    public function show(Noticia $noticia)
    {
        $noticias = Noticia::latest()->paginate(15);
        return view('admin.news.show', compact('noticia'));
    }

    public function edit(Noticia $noticia)
    {
        $noticias = Noticia::latest()->paginate(15);
        return view('admin.news.edit', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titular' => 'required',
            'imagen' => 'required',
            'piefoto' => 'required',
            'subtitulo' => 'required',
            'noticia' => 'required',
            'fecha' => 'required',
        ]);
        $noticia->update($request->all());
        return redirect()->route('noticias.index')->with('success', 'La noticia se ha actualizado correctamente');
    }
    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('success', 'La noticia se ha borrado correctamente');
    }
}
