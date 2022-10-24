<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="crud-create-edit-container">
        <h2>Añadiendo noticia</h2>
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

        <form action="{{ route('noticias.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <section>
                <strong>Foto:</strong>
                <input type="file" name="image" class="form-control" placeholder="imagen">
            </section>

            <div>
                <strong>Titular:</strong>
                <input type="text" name="titular" class="form-control" placeholder="titular">
            </div>

            <div>
                <strong>Pie de foto:</strong>
                <input type="text" name="piefoto" class="form-control" placeholder="licencia">
            </div>

            <div>
                <strong>Subtítulo:</strong>
                <input type="text" name="subtitulo" class="form-control" placeholder="subtitulo">
            </div>

            <div>
                <strong>Fecha:</strong>
                <input type="text" name="fecha" class="form-control" placeholder="fecha">
            </div>

            <section>
                <strong>Noticia:</strong>
                <textarea type="text" name="noticia" class="form-control" placeholder="noticia"></textarea>
            </section>

            <section class="buttons-group">
                <button type="submit" class="create-button">Crear</button>
                <a class="cancel-button" href="{{ route('atletas.index') }}"> Cancelar</a>
            </section>
        </form>
    </div>
</x-app-layout>
