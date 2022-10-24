<?php
namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AtletasController extends Controller
{
    public function index()
    {
        $atletas = Team::latest()->paginate(12);
        return view('admin.atletas.index', compact('atletas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.atletas.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'licence' => 'required',
            'image' => 'required|image|file',
            'category' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Team::create($input);
        return redirect()->route('atletas.index')->with('success', 'Atleta se ha creado correctamente.');
    }

    public function show(Team $atleta)
    {
        $atletas = Team::latest()->paginate(15);
        return view('admin.atletas.show', compact('atleta'));
    }

    public function edit(Team $atleta)
    {
        return view('admin.atletas.edit', compact('atleta'));
    }

    public function update(Request $request, Team $atleta)
    {
        $request->validate([
            'name' => 'required',
            'licence' => 'required',
            'category' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $atleta->update($input);
        return redirect()->route('atletas.index')->with('success', 'Atleta se ha actualizado correctamente');
    }

    public function destroy(Team $atleta)
    {
        $atleta->delete();

        return redirect()->route('atletas.index')->with('success', 'Atleta se ha borrado correctamente');
    }
}
