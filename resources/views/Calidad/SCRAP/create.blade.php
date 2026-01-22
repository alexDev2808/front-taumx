@section('titulo_pagina')
Calidad | SCRAP
@endsection

<x-app-layout :breadcrumbs="[
    ['name' => 'Inicio', 'route' => route('home.index')],
    ['name' => 'Calidad', 'route' => route('calidad.index')],
    ['name' => 'SCRAP', 'route' => route('calidad.scrap.index')],
    ['name' => 'Crear Nuevo Registro']
]">

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-primary-text leading-tight">
            {{ __('Registro de SCRAP') }}
        </h2>
    </x-slot>

    <div class="flex justify-between items-center mb-4">
        {{-- <x-button 
            textoBoton="Volver"
            tipoBoton="info"
            icono="arrow-left"
            tamanoBoton="small"
            :ruta="route('calidad.scrap.index')"
            >
        </x-button> --}}
        {{-- <h3 class="text-xl font-bold text-gray-700">Crear Nuevo Registro de SCRAP</h3> --}}
    </div>

    <div class="my-4 bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm p-6">
        <form action="{{ route('calidad.scrap.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Fecha --}}
                <div>
                    <label for="fecha" class="block text-sm font-medium text-gray-700 mb-1">Fecha (automática)</label>
                    <input
                        type="date"
                        name="fecha"
                        id="fecha"
                        value="{{ date('Y-m-d') }}"
                        disabled
                        class="w-full border text-gray-500 border-gray-300 rounded-lg shadow-sm p-2.5 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                        required>
                </div>

                {{-- Responsable --}}
                <div>
                    <label for="responsable" class="block text-sm font-medium text-gray-700 mb-1">Nombre del responsable</label>
                    <input
                        type="text"
                        name="responsable"
                        id="responsable"
                        placeholder="Ej: Juan Pérez"
                        class="w-full border border-gray-300 rounded-lg shadow-sm p-2.5 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                        required>
                </div>

                {{-- Línea / Máquina --}}
                <div>
                    <label for="linea_maquina" class="block text-sm font-medium text-gray-700 mb-1">Línea / Máquina</label>
                    <input
                        type="text"
                        name="linea_maquina"
                        id="linea_maquina"
                        placeholder="Ej: Línea 1 / Máquina A"
                        class="w-full border border-gray-300 rounded-lg shadow-sm p-2.5 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors"
                        required>
                </div>

                {{-- Área - Lista desplegable --}}
                <div>
                    <label for="area" class="block text-sm font-medium text-gray-700 mb-1">Área</label>
                    <select
                        name="area"
                        id="area"
                        class="w-full border border-gray-300 rounded-lg shadow-sm p-2.5 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors bg-white"
                        required>
                        <option value="" disabled selected>Selecciona un área</option>
                        <option value="Ensamble">Ensamble</option>
                        <option value="Inyección">Inyección</option>
                        <option value="Motores">Motores</option>
                        <option value="Ingeniería">Ingeniería</option>
                    </select>
                </div>
            </div>

            {{-- Descripción del SCRAP --}}
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-1">Descripción del SCRAP</label>
                <textarea
                    name="descripcion"
                    id="descripcion"
                    rows="4"
                    placeholder="Describe el motivo del SCRAP..."
                    class="w-full border border-gray-300 rounded-lg shadow-sm p-2.5 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition-colors resize-none"></textarea>
            </div>

            {{-- Botones --}}
            <div class="flex justify-end gap-3 pt-4 border-t border-gray-200">
                <x-button
                    textoBoton="Cancelar"
                    tipoBoton="info"
                    :ruta="route('calidad.scrap.index')">
                </x-button>
                <x-button
                    type="submit"
                    textoBoton="Guardar Registro"
                    tipoBoton="primary"
                    :ruta="route('calidad.scrap.index')">
                    >
                </x-button>
            </div>
        </form>
    </div>

</x-app-layout>