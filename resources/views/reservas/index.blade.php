<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Reservas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('reservas.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Agregar Reserva</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Habitación ID</th>
                                <th scope="col">Fecha de Inicio</th>
                                <th scope="col">Fecha de Fin</th>
                                <th scope="col">Nombre del Cliente</th>
                                <th scope="col">Email del Cliente</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservas as $reserva)
                                <tr>
                                    <td>{{ $reserva->id }}</td>
                                    <td>{{ $reserva->habitacion_id }}</td>
                                    <td>{{ $reserva->fecha_inicio }}</td>
                                    <td>{{ $reserva->fecha_fin }}</td>
                                    <td>{{ $reserva->cliente_nombre }}</td>
                                    <td>{{ $reserva->cliente_email }}</td>
                                    <td>
                                        <a href="{{ route('reservas.edit', ['reserva' => $reserva->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('reservas.destroy', ['reserva' => $reserva->id]) }}" method='POST' style="display: inline-block">
                                            @method('delete')
                                            @csrf
                                            <input class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2" type="submit" value="Eliminar">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</x-app-layout>
