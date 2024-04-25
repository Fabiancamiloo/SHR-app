<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo Hotel') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-6">
        <form action="{{ route('hoteles.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="ubicacion" class="block text-gray-700 text-sm font-bold mb-2">Ubicación:</label>
                <input type="text" name="ubicacion" id="ubicacion" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="numero_telefono" class="block text-gray-700 text-sm font-bold mb-2">Número de Teléfono:</label>
                <input type="text" name="numero_telefono" id="numero_telefono" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="mb-4">
                <label for="email_contacto" class="block text-gray-700 text-sm font-bold mb-2">Email de Contacto:</label>
                <input type="email" name="email_contacto" id="email_contacto" class="form-input rounded-md shadow-sm mt-1 block w-full" />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar Hotel
                </button>
            </div>
        </form>
    </div>
    @include('footer')
</x-app-layout>
