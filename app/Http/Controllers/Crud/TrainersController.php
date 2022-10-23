<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainersController extends Controller
{

    public function index()
    {
        $trainers = Trainer::latest()->paginate(15);
        return view('admin.trainers.index', compact('trainers'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.trainers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|file',
            'roll' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Trainer::create($input);
        return redirect()->route('trainers.index')->with('success', 'Entrenador se ha creado correctamente.');    }

    public function show(Trainer $trainer)
    {
        $trainers = Trainer::latest()->paginate(15);
        return view('admin.trainers.show', compact('trainer'));
    }
    public function edit(Trainer $trainer)
    {
        $trainers = Trainer::latest()->paginate(15);
        return view('admin.trainers.edit', compact('trainer'));
    }

    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([
            'name' => 'required',
            'roll' => 'required',
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

        $trainer->update($input);
        return redirect()->route('trainers.index')->with('success', 'Entrenador se ha actualizado correctamente');    }
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route('trainers.index')->with('success', 'Entrenador se ha borrado correctamente');
    }
}
