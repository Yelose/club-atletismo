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
        <h2>Editando {{$noticia->name}}</h2>
        <img src="/images/{{ $noticia->image }}">
        <form action="{{ route('noticias.update',$noticia->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <section class="form-group">
                <strong>Foto:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </section>
            <div class="form-group">
                <strong>Titular:</strong>
                <input type="text" name="titular" value="{{ $noticia->titular }}" class="form-control"
                    placeholder="titular">
            </div>
            <div class="form-group">
                <strong>Pie de foto:</strong>
                <input class="form-control" name="piefoto" placeholder="pie de foto"
                    value="{{ $noticia->piefoto }}"></input>
            </div>

            <div class="form-group">
                <strong>Subtítulo:</strong>
                <input type="text" name="subtitulo" value="{{ $noticia->subtitulo }}" class="form-control"
                    placeholder="Categoría">
            </div>

            <div class="form-group">
                <strong>Fecha:</strong>
                <input type="text" name="fecha" value="{{ $noticia->fecha }}" class="form-control" placeholder="fecha">
            </div>

            <section class="form-group">
                <strong>Noticia:</strong>
                <textarea type="text" name="noticia" class="form-control"
                    placeholder="noticia">{{ $noticia->noticia }}</textarea>
            </section>


            <section class="buttons-group">
                <button type="submit" class="create-button">Aceptar</button>
                <a class="cancel-button" href="{{ route('noticias.index') }}">Cancelar</a>
            </section>

        </form>
    </div>

</x-app-layout>
