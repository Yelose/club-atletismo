<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Uy!</strong> Hay algún problema con los datos introducidos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="crud-create-edit-container">
        <h2>Editando {{$trainer->name}}</h2>
        <img src="/images/{{ $trainer->image }}">
        <form action="{{ route('trainers.update',$trainer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <section class="form-group">
                <strong>Foto:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </section>

            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $trainer->name }}" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Puesto:</strong>
                <input class="form-control" name="roll" placeholder="puesto" value="{{ $trainer->roll }}"></input>
            </div>

            <section class="buttons-group">
                <button type="submit" class="create-button">Aceptar</button>
                <a class="cancel-button" href="{{ route('trainers.index') }}">Cancelar</a>
            </section>

        </form>
    </div>
</x-app-layout>
