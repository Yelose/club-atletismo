<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="crud-create-edit-container">

        <h2>Añadir nueva noticia</h2>

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

        <form action="{{ route('noticias.store') }}" method="POST">
            @csrf
            <div>
                <strong>Titular:</strong>
                <input type="text" name="titular" class="form-control" placeholder="Titular">
            </div>

            <div>
                <strong>Foto:</strong>
                <input type="text" name="imagen" class="form-control" placeholder="Imagen">
            </div>

            <div>
                <strong>Pie de foto:</strong>
                <input type="text" name="piefoto" class="form-control" placeholder="Piefoto">
            </div>

            <div>
                <strong>Fecha:</strong>
                <input type="text" name="fecha" class="form-control" placeholder="Fecha">
            </div>

            <div>
                <strong>Subtítulo:</strong>
                <input name="subtitulo" class="form-control" placeholder="Subtitulo"></input>
            </div>

            <section>
                <strong>Noticia:</strong>
                <textarea name="noticia" class="form-control" placeholder="Noticia"></textarea>
            </section>

            <section class="buttons-group">
                <button type="submit" class="create-button">Submit</button>
                <a class="cancel-button" href="{{ route('noticias.index') }}"> Volver</a>
            </section>
        </form>
    </div>

</x-app-layout>
