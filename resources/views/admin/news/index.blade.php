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

                <a class="btn btn-success" href="{{ route('noticias.create') }}">Crear nueva noticia</a>

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

            <th>No</th>

            <th>Name</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($noticias as $noticia)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $noticia->titular }}</td>

            <td>{{ $noticia->imagen }}</td>

            <td>{{ $noticia->piefoto }}</td>

            <td>{{ $noticia->subtitulo }}</td>

            <td>{{ $noticia->noticia }}</td>

            <td>{{ $noticia->fecha }}</td>


            <td>

                <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('noticias.show',$noticia->id) }}">Mostrar</a>



                    <a class="btn btn-primary" href="{{ route('noticias.edit',$noticia->id) }}">Editar</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Borrar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $noticias->links() !!}



</x-app-layout>
