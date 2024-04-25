<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Reserva') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="habitacion_id" class="block text-gray-700 text-sm font-bold mb-2">ID de Habitación:</label>
                <input type="text" name="habitacion_id" id="habitacion_id" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $reserva->habitacion_id }}" />
            </div>
            <div class="mb-4">
                <label for="fecha_inicio" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Inicio:</label>
                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $reserva->fecha_inicio }}" />
            </div>
            <div class="mb-4">
                <label for="fecha_fin" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Fin:</label>
                <input type="date" name="fecha_fin" id="fecha_fin" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $reserva->fecha_fin }}" />
            </div>
            <div class="mb-4">
                <label for="cliente_nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Cliente:</label>
                <input type="text" name="cliente_nombre" id="cliente_nombre" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $reserva->cliente_nombre }}" />
            </div>
            <div class="mb-4">
                <label for="cliente_email" class="block text-gray-700 text-sm font-bold mb-2">Email del Cliente:</label>
                <input type="email" name="cliente_email" id="cliente_email" class="form-input rounded-md shadow-sm mt-1 block w-full" value="{{ $reserva->cliente_email }}" />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar Cambios
                </button>
            </div>
        </form>
    </div>
    @include('footer')
</x-app-layout>
