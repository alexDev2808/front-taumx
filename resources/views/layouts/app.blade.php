@props(['breadcrumbs' => []])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TES') }} | @yield('titulo_pagina')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
        @stack('styles')
    </head>
    <body class="font-sans antialiased text-secondary-800 text-size-body">
        <div class="min-h-screen bg-secondary-50">
            @include('layouts.navigation')

            <!-- Main Content Wrapper -->
            <div id="mainContent" class="transition-all duration-300 ease-in-out ml-0">
                <!-- Top Bar -->
                <div class="bg-white border-b border-secondary-300 sticky top-0 z-40">
                    <div class="px-4 py-3 flex items-center justify-between">
                        <button id="toggleSidebar" class="text-secondary-600 hover:text-secondary-900 focus:outline-none focus:ring-0 rounded-lg p-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>

                        @if (isset($header))
                            <div class="flex-1 ml-4 font-semibold text-size-title text-title-color leading-tight">
                                {{ $header }}
                            </div>
                        @endif
                    </div>
                </div>

                @include('layouts.partials.breadcrumbs')

                <!-- Page Content -->
                <main class="px-4 lg:px-6">
                    {{ $slot }}
                </main>
            </div>

            @livewireScripts
            @stack('scripts')

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const sidebar = document.getElementById('sidebar');
                    const mainContent = document.getElementById('mainContent');
                    const toggleBtn = document.getElementById('toggleSidebar');
                    const overlay = document.getElementById('sidebarOverlay');

                    if (!sidebar || !mainContent || !toggleBtn || !overlay) {
                        console.error('No se encontraron los elementos necesarios para el sidebar');
                        return;
                    }

                    let sidebarOpen = false;

                    // Inicializar estado según tamaño de pantalla
                    function initializeSidebar() {
                        if (window.innerWidth >= 1024) {
                            // Desktop: sidebar abierto por defecto
                            sidebarOpen = true;
                            sidebar.classList.remove('-translate-x-full');
                            mainContent.style.marginLeft = '16rem'; // 64 * 0.25rem = 16rem
                            overlay.classList.add('hidden');
                        } else {
                            // Mobile: sidebar cerrado por defecto
                            sidebarOpen = false;
                            sidebar.classList.add('-translate-x-full');
                            mainContent.style.marginLeft = '0';
                            overlay.classList.add('hidden');
                        }
                    }

                    function toggleSidebar() {
                        sidebarOpen = !sidebarOpen;

                        if (sidebarOpen) {
                            // Abrir sidebar
                            sidebar.classList.remove('-translate-x-full');

                            if (window.innerWidth >= 1024) {
                                // Desktop: mover contenido
                                mainContent.style.marginLeft = '16rem';
                            } else {
                                // Mobile: mostrar overlay
                                overlay.classList.remove('hidden');
                            }
                        } else {
                            // Cerrar sidebar
                            sidebar.classList.add('-translate-x-full');

                            if (window.innerWidth >= 1024) {
                                // Desktop: contenido a la izquierda
                                mainContent.style.marginLeft = '0';
                            } else {
                                // Mobile: ocultar overlay
                                overlay.classList.add('hidden');
                            }
                        }
                    }

                    toggleBtn.addEventListener('click', toggleSidebar);
                    overlay.addEventListener('click', function() {
                        if (window.innerWidth < 1024) {
                            toggleSidebar();
                        }
                    });

                    // Cerrar sidebar en mobile al hacer clic en un enlace
                    const sidebarLinks = sidebar.querySelectorAll('a');
                    sidebarLinks.forEach(link => {
                        link.addEventListener('click', () => {
                            if (window.innerWidth < 1024 && sidebarOpen) {
                                toggleSidebar();
                            }
                        });
                    });

                    // Ajustar sidebar al cambiar el tamaño de la ventana
                    let resizeTimer;
                    window.addEventListener('resize', () => {
                        clearTimeout(resizeTimer);
                        resizeTimer = setTimeout(() => {
                            initializeSidebar();
                        }, 250);
                    });

                    // Inicializar al cargar
                    initializeSidebar();
                });
            </script>
        </div>
    </body>
</html>
