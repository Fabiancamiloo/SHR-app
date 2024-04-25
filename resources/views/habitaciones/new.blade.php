<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Habitación') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form action="{{ route('habitaciones.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="hotel_id" class="block text-gray-700 text-sm font-bold mb-2">Hotel ID:</label>
                <input type="text" name="hotel_id" id="hotel_id" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="numero" class="block text-gray-700 text-sm font-bold mb-2">Número:</label>
                <input type="text" name="numero" id="numero" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="tipo" class="block text-gray-700 text-sm font-bold mb-2">Tipo:</label>
                <input type="text" name="tipo" id="tipo" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="precio_por_noche" class="block text-gray-700 text-sm font-bold mb-2">Precio por Noche:</label>
                <input type="text" name="precio_por_noche" id="precio_por_noche" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar Habitación
                </button>
            </div>
        </form>
    </div>
    @include('footer')
</x-app-layout>
