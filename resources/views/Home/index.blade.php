@section('titulo_pagina')
    Dashboard
@endsection

<x-app-layout>

    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h3 class="font-semibold text-size-title text-subtitle-color my-4">Sitios</h3>

</x-app-layout>