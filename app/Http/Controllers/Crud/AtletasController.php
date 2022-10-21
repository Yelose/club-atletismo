<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class AtletasController extends Controller
{
    public function index()
    {
        $atletas = Team::latest()->paginate(15);



        return view('admin.atletas.index',compact('atletas'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'image' => 'required',
            'category' => 'required',

        ]);



        Team::create($request->all());



        return redirect()->route('atletas.index')->with('success','Atleta created successfully.');
    }

    public function show(Team $atleta)
    {
        $atletas = Team::latest()->paginate(15);

        return view('admin.atletas.show',compact('atleta'));
    }

    public function edit(Team $atleta)
    {
        $atletas = Team::latest()->paginate(15);

        return view('admin.atletas.edit',compact('atletas'));
    }

    public function update(Request $request, Team $atleta)
    {
        $request->validate([

            'name' => 'required',
            'licence' => 'required',
            'image' => 'required',
            'category' => 'required',

        ]);

        $atleta->update($request->all());

        return redirect()->route('atletas.index')->with('success','Atleta updated successfully');
    }

    public function destroy(Team $atleta)
    {
        $atleta->delete();

        return redirect()->route('atletas.index')->with('success','Atleta deleted successfully');
    }
}
