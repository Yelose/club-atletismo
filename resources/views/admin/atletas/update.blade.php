<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Mostrar atletas</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('atletas.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $atleta->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Details:</strong>

                {{ $atleta->detail }}

            </div>

        </div>

    </div>

</x-app-layout>
