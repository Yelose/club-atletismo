<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('trainers.create') }}"> Crear nuevo entrenador</a>
            </div>
        </div>
    </div>



    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif



    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Puesto</th>
        </tr>

        @foreach ($trainers as $trainer)

        <tr>
            <td>{{ $trainer->name }}</td>
            <td>{{ $trainer->photo }}</td>
            <td>{{ $trainer->roll }}</td>
            <td>

                <form action="{{ route('trainers.destroy',$trainer->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('trainers.edit',$trainer->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $trainers->links() !!}

</x-app-layout>
