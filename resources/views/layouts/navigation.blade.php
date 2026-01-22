<!-- Overlay para móviles -->
<div id="sidebarOverlay" class="fixed inset-0 bg-white/20 backdrop-blur dark:bg-slate-900/60 z-40 hidden"></div>

<!-- Sidebar -->
<aside id="sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen border-r border-secondary-300 bg-white/70 backdrop-blur-xl shadow-xl lg:shadow-none transition-transform duration-300 ease-in-out">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <!-- Logo/Brand -->
        <div class="flex items-center justify-center py-1">
            <a href="{{ route('home.index') }}">
                <x-brand-logo tamanoLogo="sm" />
            </a>
        </div>


        <!-- Navigation Menu -->
        <span class="text-xs text-secondary-400 p-1">MENÚ</span>
        <ul class="space-y-1 mt-4">
            <!-- Dashboard -->
            <x-item-navbar 
                :ruta="route('home.index')" 
                icono="bi-columns-gap" 
                nombre="Inicio"
            ></x-item-navbar>

            <!-- Sistemas -->
            <x-item-navbar 
                :ruta="route('sistemas.index')" 
                icono="bi-hdd-network" 
                nombre="Sistemas"
            ></x-item-navbar>

            <!-- Calidad -->
            <x-item-navbar 
                :ruta="route('calidad.index')" 
                icono="bi-shield-check" 
                nombre="Calidad"
            ></x-item-navbar>

        </ul>

    </div>
</aside>