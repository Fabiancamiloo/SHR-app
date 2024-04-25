<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Habitaciones') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('habitaciones.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Agregar Habitación</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Hotel ID</th>
                                <th scope="col">Número</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Precio por Noche</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($habitaciones as $habitacion)
                                <tr>
                                    <td>{{ $habitacion->id }}</td>
                                    <td>{{ $habitacion->hotel_id }}</td>
                                    <td>{{ $habitacion->numero }}</td>
                                    <td>{{ $habitacion->tipo }}</td>
                                    <td>{{ $habitacion->precio_por_noche }}</td>
                                    <td>
                                        <a href="{{ route('habitaciones.edit', ['habitacion' => $habitacion->id]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('habitaciones.destroy', ['habitacion' => $habitacion->id]) }}" method='POST' style="display: inline-block">
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
