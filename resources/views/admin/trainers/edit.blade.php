<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="crud-create-edit-container">
        <h2>Editar responsable de equipo</h2>

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

        <form action="{{ route('trainers.update',$trainer->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $trainer->name }}" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Foto:</strong>
                <input class="form-control" name="photo" placeholder="Photo" value="{{ $trainer->photo
                }}"></input>
            </div>

            <div class="form-group">
                <strong>Puesto:</strong>
                <input class="form-control" name="roll" placeholder="Roll" value="{{ $trainer->roll
                }}"></input>
            </div>

            <section class="buttons-group">
                <a class="cancel-button" href="{{ route('trainers.index') }}">Cancelar</a>
                <button type="submit" class="create-button">Aceptar</button>
            </section>
        </form>
    </div>
</x-app-layout>
