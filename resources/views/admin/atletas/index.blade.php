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

                <a class="btn btn-success" href="{{ route('atletas.create') }}"> Crear atleta</a>

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

        @foreach ($atletas as $atleta)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $atleta->name }}</td>

            <td>{{ $atleta->licence }}</td>

            <td>{{ $atleta->image }}</td>

            <td>{{ $atleta->category }}</td>

            <td>

                <form action="{{ route('atletas.destroy',$atleta->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('atletas.show',$atleta->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('atletas.edit',$atleta->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Borrar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>



    {!! $atletas->links() !!}



</x-app-layout>
