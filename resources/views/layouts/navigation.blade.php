<!-- Overlay para móviles -->
<div id="sidebarOverlay" class="fixed inset-0 bg-white/60 backdrop-blur-md dark:bg-slate-900/60 z-40 hidden"></div>

<!-- Sidebar -->
<aside id="sidebar" class="fixed top-0 left-0 z-50 w-64 h-screen transition-transform duration-300 ease-in-out -translate-x-full bg-gradient-to-b from-gray-900 to-gray-800 shadow-xl">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <!-- Logo/Brand -->
        <div class="flex items-center mb-8 pb-4 border-b border-gray-700">
            <a href="/" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-xl font-bold text-white">TES</span>
            </a>
        </div>

        <!-- Navigation Menu -->
        <ul class="space-y-2 font-medium">
            <!-- Dashboard -->
            <li>
                <a href="/" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <span class="ml-3">Inicio</span>
                </a>
            </li>

            <!-- Proyectos -->
            <li>
                <a href="{{ route('sistemas.index') }}" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    <span class="ml-3">Sistemas</span>
                </a>
            </li>

            <!-- Tareas -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                    <span class="ml-3">Calidad</span>
                </a>
            </li>

            <!-- Calendario -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="ml-3">Desarrollo Organizacional</span>
                </a>
            </li>

            <!-- Equipo -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <span class="ml-3">Equipo</span>
                </a>
            </li>

            <!-- Divider -->
            <li class="pt-4 mt-4 border-t border-gray-700">
                <span class="text-xs text-gray-500 uppercase tracking-wider">Configuración</span>
            </li>

            <!-- Reportes -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <span class="ml-3">Reportes</span>
                </a>
            </li>

            <!-- Configuración -->
            <li>
                <a href="#" class="flex items-center p-3 text-gray-300 rounded-lg hover:bg-gray-700 hover:text-white group transition-all duration-200">
                    <svg class="w-5 h-5 text-gray-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span class="ml-3">Configuración</span>
                </a>
            </li>
        </ul>

        <!-- User Profile Section -->
        <div class="absolute bottom-4 left-3 right-3">
            <div class="flex items-center p-3 bg-gray-700 rounded-lg">
                <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-semibold">
                    {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
                </div>
                <div class="ml-3 flex-1 min-w-0">
                    <p class="text-sm font-medium text-white truncate">
                        {{ Auth::user()->name ?? 'Usuario' }}
                    </p>
                    <p class="text-xs text-gray-400 truncate">
                        {{ Auth::user()->email ?? 'usuario@ejemplo.com' }}
                    </p>
                </div>
                <form method="POST" action="{{ route('home.index') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-gray-400 hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>