<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="crud-create-edit-container">

        <h2>Editar noticia</h2>

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

        <form action="{{ route('noticias.update', $noticia->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <strong>Titular:</strong>
                <input type="text" name="titular" value="{{ $noticia->titular }}" class="form-control"
                    placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Imagen:</strong>
                <input type="text" name="imagen" value="{{ $noticia->imagen }}" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Descripción de la imagen:</strong>
                <input type="text" name="piefoto" value="{{ $noticia->piefoto }}" class="form-control"
                    placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Subtítulo:</strong>
                <input type="text" name="subtitulo" value="{{ $noticia->subtitulo }}" class="form-control"
                    placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Contenido de la noticia:</strong>
                <textarea class="form-control" style="height:150px" name="noticia"
                    placeholder="Contenido de la noticia">{{ $noticia->noticia }}</textarea>
            </div>

            <div class="form-group">
                <strong>Fecha:</strong>
                <input type="text" name="fecha" value="{{ $noticia->fecha }}" class="form-control" placeholder="Name">
            </div>


            <section class="buttons-group">
                <a class="cancel-button" href="{{ route('noticias.index') }}">Cancelar</a>
                <button type="submit" class="create-button">Aceptar</button>
            </section>

        </form>
    </div>
</x-app-layout>
