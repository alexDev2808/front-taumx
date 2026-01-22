
@section('titulo_pagina')
    Iniciar sesión
@endsection

<x-guest-layout>


    <section class="bg-secondary-50 dark:bg-gray-900">

        <img class="absolute w-full h-full object-cover" src="{{ asset('assets/backgrounds/bg_azul.png') }}" alt="background login" />

        <div class="absolute w-5/6 border-4 border-white rounded-4xl m-auto my-9 inset-0 z-10 flex">

            <div class="hidden md:flex w-1/2 h-full rounded-3xl py-5 px-8 items-end">
                <p class="text-white italic text-2xl">- El exito es la suma de esfuerzos repetidos dia tras dia</p>
            </div>

            <div class="w-full md:w-1/2 bg-white flex flex-col items-center justify-center px-6 py-8 rounded-3xl md:rounded-l-0">

                <x-brand-logo tamanoLogo="base" />

                <div class="w-full md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                            Inicia sesión
                        </h1>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu correo electrónico empresarial</label>
                                <input type="email" name="email" id="email" class="text-smbg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="usuario@taurus.com.mx" required="">
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="text-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            </div>
                            <div class="flex flex-col md:flex-row items-center justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="remember" class="text-gray-500 dark:text-gray-300">Recordarme</label>
                                    </div>
                                </div>
                                <a href="#" class="text-sm mt-4 md:mt-0 font-medium text-primary-900 hover:underline dark:text-primary-900">¿Olvidaste tu contraseña?</a>
                            </div>
                            {{-- <button type="submit" class="w-full text-white bg-primary-900 hover:bg-primary-950 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Iniciar sesión</button> --}}
                            <x-button textoBoton="Iniciar sesión" tipoBoton="primary" tamanoBoton="full"/>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </section>
</x-guest-layout>
