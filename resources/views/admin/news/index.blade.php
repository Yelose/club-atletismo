<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <p>Gracias Paz!</p>
    <table>
        <th>Titular</th>
        <th>Subtítulo</th>
        <th>Fecha</th>
        <th>Acciones</th>
        @foreach($noticias as $noticia)
        <tr>
            <td>{{ $noticia->titular }}</td>
            <td>{{ $noticia->subtitulo}}</td>
            <td>{{ $noticia->fecha}}</td>
            <td>
                <div>
                    <a>Editar</a>
                </div>
                <div>
                    <a>Eliminar</a>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</x-app-layout>
