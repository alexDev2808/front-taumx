
@section('titulo_pagina')
    No se encontró la página
@endsection

<x-guest-layout>

    <section class="bg-gray-50 dark:bg-gray-900 flex flex-col items-center pt-24 h-screen">

        <img class="w-56 md:w-80 drop-shadow-2xl" src="{{ asset('assets/img/page_404.png') }}" alt="Página no encontrada" />

        <div class="flex flex-col justify-center items-center my-2 px-2 md:px-40 lg:px-80 text-center">
            <h2 class="font-bold text-lg md:text-5xl mb-2">Página no encontrada!</h2>
            <p class="text-gray-500 text-sm">Parece que no encontramos la página que buscabas. Revisa la URL y asegurate de que esté bien escrita y vuelve a intentarlo.</p>
        </div>

        <div class="flex md:flex-row-reverse gap-2 mt-4 flex-col-reverse">
            <x-button 
            textoBoton="Ir al inicio" 
            tipoBoton="primary"
            posicionIcono="right"
            :ruta="route('home.index')"
            >
        </x-button>
        <x-button 
            textoBoton="Regresar" 
            tipoBoton="info"
            :ruta="url()->previous()"
            >
        </x-button>
        </div>


    </section>

</x-guest-layout>