<div class="bg-white rounded-xl p-6 flex flex-col justify-between border border-gray-200">
    <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mb-2">
        <svg class="w-6 h-6 text-yellow-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
        </svg>
    </div>
    <div class="font-semibold text-gray-700 text-lg mb-4">
        {{ $titulo }}
    </div>
    <div class="flex items-center justify-end gap-0.5 mt-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 bi bi-arrow-right text-gray-500" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
        </svg>
        <a href="{{ $ruta }}" class="text-gray-500 hover:text-gray-700 font-medium">{{ $textoBoton }}</a>
    </div>
    
</div>