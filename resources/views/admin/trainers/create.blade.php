<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="crud-create-edit-container">
        <h2>Añadiendo entrenador</h2>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Vaya! Parece que falta algo por rellenar</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('trainers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <section>
                <strong>Foto:</strong>
                <input type="file" name="image" class="form-control" placeholder="imagen">
            </section>

            <div>
                <strong>Nombre:</strong>
                <input type="text" name="name" class="form-control" placeholder="nombre completo">
            </div>


            <div>
                <strong>Puesto:</strong>
                <input type="text" name="roll" class="form-control" placeholder="categoría">
            </div>

            <section class="buttons-group">
                <button type="submit" class="create-button">Crear</button>
                <a class="cancel-button" href="{{ route('trainers.index') }}"> Cancelar</a>
            </section>
        </form>
    </div>

</x-app-layout>
