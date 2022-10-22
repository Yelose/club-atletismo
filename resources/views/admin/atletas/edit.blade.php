<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="crud-create-edit-container">
        <h2>Editar Atleta</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Uy!</strong>Hay algún problema con los datos.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('atletas.update', $atleta->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $atleta->name }}" class="form-control" placeholder="Name">
            </div>

            <div class="form-group">
                <strong>Licencia:</strong>
                <input class="form-control" name="licence" placeholder="Licence" value="{{
                $atleta->licence }}"></input>
            </div>

            <div class="form-group">
                <strong>Foto:</strong>
                <input class="form-control" name="image" placeholder="Image" value="{{
                $atleta->image
                }}"></input>
            </div>
            <div>
                <strong>Categoría:</strong>
                <input class="form-control" name="category" placeholder="Category" value="{{
                $atleta->category }}"></input>

            </div>

            <section class="buttons-group">
                <button type="submit" class="create-button">Aceptar</button>
                <a class="cancel-button" href="{{ route('atletas.index') }}">Cancelar</a>
            </section>

    </div>



    </form>
    </div>
</x-app-layout>
