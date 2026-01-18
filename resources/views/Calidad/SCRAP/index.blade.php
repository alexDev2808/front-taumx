@section('titulo_pagina')
Calidad | SCRAP
@endsection

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-primary-text leading-tight">
            {{ __('Registro de SCRAP') }}
        </h2>
    </x-slot>

    <h3 class="text-xl font-semibold text-gray-700">Listado</h3>

    {{-- TODO: Crear componente de botón --}}
    <div class="flex justify-end my-4">
        <x-button 
            textoBoton="Nuevo Registro" 
            tipoBoton="primary"
            icono="plus"
            posicionIcono="right"
            :ruta="route('calidad.scrap.create')"
            >
        </x-button>
        {{-- <button class="px-6 py-2 bg-primary-900 text-white rounded-lg hover:bg-primary-800 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">Nuevo</button> --}}
    </div>

    <div class="my-4 bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 font-semibold tracking-wider">Folio</th>
                        <th class="px-6 py-4 font-semibold tracking-wider">Responsable</th>
                        <th class="px-6 py-4 font-semibold tracking-wider">Área</th>
                        <th class="px-6 py-4 font-semibold tracking-wider">Fecha creación</th>
                        <th class="px-6 py-4 font-semibold tracking-wider">Última modificación</th>
                        <th class="px-6 py-4 font-semibold tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0001</td>
                        <td class="px-6 py-4 text-gray-600">Carlos Mendoza</td>
                        <td class="px-6 py-4 text-gray-600">Ensamble</td>
                        <td class="px-6 py-4 text-gray-600">12/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">14/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Cerrada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0002</td>
                        <td class="px-6 py-4 text-gray-600">María González</td>
                        <td class="px-6 py-4 text-gray-600">Inyección</td>
                        <td class="px-6 py-4 text-gray-600">10/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">-</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Abierta</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0003</td>
                        <td class="px-6 py-4 text-gray-600">Roberto Sánchez</td>
                        <td class="px-6 py-4 text-gray-600">Motores</td>
                        <td class="px-6 py-4 text-gray-600">08/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">15/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Modificada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0004</td>
                        <td class="px-6 py-4 text-gray-600">Ana Ramírez</td>
                        <td class="px-6 py-4 text-gray-600">Ingeniería</td>
                        <td class="px-6 py-4 text-gray-600">05/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">10/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Cerrada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0005</td>
                        <td class="px-6 py-4 text-gray-600">Luis Hernández</td>
                        <td class="px-6 py-4 text-gray-600">Ensamble</td>
                        <td class="px-6 py-4 text-gray-600">14/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">-</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Abierta</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0006</td>
                        <td class="px-6 py-4 text-gray-600">Patricia López</td>
                        <td class="px-6 py-4 text-gray-600">Inyección</td>
                        <td class="px-6 py-4 text-gray-600">02/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">06/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Cerrada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0007</td>
                        <td class="px-6 py-4 text-gray-600">Fernando Torres</td>
                        <td class="px-6 py-4 text-gray-600">Motores</td>
                        <td class="px-6 py-4 text-gray-600">28/12/2025</td>
                        <td class="px-6 py-4 text-gray-600">13/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Modificada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0008</td>
                        <td class="px-6 py-4 text-gray-600">Gabriela Díaz</td>
                        <td class="px-6 py-4 text-gray-600">Ingeniería</td>
                        <td class="px-6 py-4 text-gray-600">15/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">-</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Abierta</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0009</td>
                        <td class="px-6 py-4 text-gray-600">Jorge Martínez</td>
                        <td class="px-6 py-4 text-gray-600">Ensamble</td>
                        <td class="px-6 py-4 text-gray-600">20/12/2025</td>
                        <td class="px-6 py-4 text-gray-600">28/12/2025</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Cerrada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0010</td>
                        <td class="px-6 py-4 text-gray-600">Sandra Ruiz</td>
                        <td class="px-6 py-4 text-gray-600">Inyección</td>
                        <td class="px-6 py-4 text-gray-600">18/12/2025</td>
                        <td class="px-6 py-4 text-gray-600">11/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Modificada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0011</td>
                        <td class="px-6 py-4 text-gray-600">Miguel Ángel Vega</td>
                        <td class="px-6 py-4 text-gray-600">Motores</td>
                        <td class="px-6 py-4 text-gray-600">16/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">-</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Abierta</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0012</td>
                        <td class="px-6 py-4 text-gray-600">Elena Castro</td>
                        <td class="px-6 py-4 text-gray-600">Ingeniería</td>
                        <td class="px-6 py-4 text-gray-600">10/12/2025</td>
                        <td class="px-6 py-4 text-gray-600">22/12/2025</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Cerrada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0013</td>
                        <td class="px-6 py-4 text-gray-600">Ricardo Flores</td>
                        <td class="px-6 py-4 text-gray-600">Ensamble</td>
                        <td class="px-6 py-4 text-gray-600">05/12/2025</td>
                        <td class="px-6 py-4 text-gray-600">09/01/2026</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800">Modificada</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150 bg-gray-50/50">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0014</td>
                        <td class="px-6 py-4 text-gray-600">Claudia Moreno</td>
                        <td class="px-6 py-4 text-gray-600">Inyección</td>
                        <td class="px-6 py-4 text-gray-600">13/01/2026</td>
                        <td class="px-6 py-4 text-gray-600">-</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-blue-100 text-blue-800">Abierta</span></td>
                    </tr>
                    <tr class="hover:bg-gray-50 transition-colors duration-150">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">SC-0015</td>
                        <td class="px-6 py-4 text-gray-600">Alejandro Jiménez</td>
                        <td class="px-6 py-4 text-gray-600">Motores</td>
                        <td class="px-6 py-4 text-gray-600">01/12/2025</td>
                        <td class="px-6 py-4 text-gray-600">15/12/2025</td>
                        <td class="px-6 py-4"><span class="px-2 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">Cerrada</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
