@section('titulo_pagina')
    Sistemas
@endsection

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-primary-text leading-tight">
            {{ __('Sistemas') }}
        </h2>
    </x-slot>

    <h3 class="text-xl font-semibold text-gray-700">Sitios</h3>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 my-2 bg-white p-5 rounded-xl border border-gray-200">
        <x-card 
            titulo="Gestión de Personal" 
            ruta="{{ route('login.index') }}" 
            >
        </x-card>
        <x-card 
            titulo="Gestión de Equipos de computo" 
            ruta="{{ route('login.index') }}" 
            >
        </x-card>

        <x-card 
            titulo="Gestión de Equipos de computo" 
            ruta="{{ route('login.index') }}" 
            >
        </x-card>

        <x-card 
            titulo="Gestión de Equipos de computo" 
            ruta="{{ route('login.index') }}" 
            >
        </x-card>

        <x-card 
            titulo="Gestión de Equipos de computo" 
            ruta="{{ route('login.index') }}" 
            >
        </x-card>
    </div>
    

</x-app-layout>
