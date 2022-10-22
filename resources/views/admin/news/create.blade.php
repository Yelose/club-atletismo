<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Añadir nueva noticia</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('noticias.index') }}"> Volver</a>

            </div>

        </div>

    </div>



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



        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Titular:</strong>

                    <input type="text" name="titular" class="form-control" placeholder="Titular">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Foto:</strong>

                    <input type="text" name="imagen" class="form-control" placeholder="Imagen">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Pie de foto:</strong>

                    <input type="text" name="piefoto" class="form-control" placeholder="Piefoto">

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Subtítulo:</strong>

                    <textarea class="form-control" style="height:150px" name="subtitulo" placeholder="Subtitulo"></textarea>

                </div>
                <div class="form-group">

                    <strong>Noticia:</strong>

                    <textarea class="form-control" style="height:150px" name="noticia" placeholder="Noticia"></textarea>

                </div>

                <div class="form-group">

                    <strong>Fecha:</strong>

                    <input type="text" name="fecha" class="form-control" placeholder="Fecha">

                </div>


            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>



    </form>

</x-app-layout>