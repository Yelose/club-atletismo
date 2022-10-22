<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $noticias = Noticia::latest()->paginate(10);

        return view('admin.noticias.index', compact('noticias'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titular' => 'required',
            'imagen' => 'required',
            'piefoto' => 'required',
            'subtitulo' => 'required',
            'noticia' => 'required',
            'fecha' => 'required'
        ]);

        Noticia::create($request->all());

        return redirect()->route('noticia.index')->with('OK', 'Noticia creada correctamente.');
    }

    public function show(Noticia $noticia)
    {
        return view('noticias.show', compact('noticia'));
    }

    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titular' => 'required',
            'imagen' => 'required',
            'piefoto' => 'required',
            'subtitulo' => 'required',
            'noticia' => 'required',
            'fecha' => 'required'
        ]);

        $noticia->update($request->all());

        return redirect()->route('products.index')->with('OK', 'Noticia subida correctamente');
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();

        return redirect()->route('products.index')->with('OK', 'Noticia borrada correctamente.');
    }
}
