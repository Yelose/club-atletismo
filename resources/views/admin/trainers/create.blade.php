<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="crud-create-edit-container">
        <h2>Añadir nuevo entrenador</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Uy!</strong>Hay algún error en los datos introducidos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('trainers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nombre">
            </div>

            <div class="form-group">
                <strong>Foto:</strong>
                <input class="form-control" name="photo" placeholder="Imagen"></input>
            </div>

            <div class="form-group">
                <strong>Puesto:</strong>
                <input class="form-control" name="roll" placeholder="Nombre del puesto que ocupa"></input>
            </div>

            <section class="buttons-group">
                <button type="submit" class="create-button">Aceptar</button>
                <a class="cancel-button" href="{{ route('trainers.index') }}">Cancelar</a>
            </section>

        </form>
    </div>

</x-app-layout>
