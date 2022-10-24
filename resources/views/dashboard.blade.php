<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="dashboard-container">
                        <h1>Sección administrador</h1>
                        <p>En esta sección podrás modificar, crear y eliminar los datos de noticias, atletas y
                            entrenadores de tu página web.</p>
                        <section>
                            <div>
                                <h2>Noticias</h2>
                                <strong>{{$noticias->count()}}</strong>
                            </div>
                            <div>
                                <h2>Atletas</h2>
                                <strong>{{$atletas->count()}}</strong>
                            </div>
                            <div>
                                <h2>Entrenadores</h2>
                                <strong>{{$entrenadores->count()}}</strong>
                            </div>
                        </section>
                        <p>En las pestañas de arriba tienes todas las opciones.</p>
                        <p>Para cerrar la sesión, haz click arriba a la derecha en "admin" y pulsa "salir"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
