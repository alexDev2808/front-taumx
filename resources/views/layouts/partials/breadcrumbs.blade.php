{{-- Breadcrumbs para blade (sin Alpine.js) --}}

@if (count($breadcrumbs) > 0)
    <nav class="px-4 lg:px-6 py-1">
        <ol class="flex flex-wrap">
            @foreach ($breadcrumbs as $breadcrumb)
                <li 
                    @class(["ps-2 before:float-left before:pe-2 before:content-['>']" => !$loop->first, 'text-xs leading-normal text-secondary-700'])>

                    @isset($breadcrumb['route'])   
                        <a class="opacity-50" href="{{ $breadcrumb['route'] }}">{{ $breadcrumb['name']}}</a>
                    @else
                        <span class="underline text-xs">
                            {{ $breadcrumb['name'] }}   
                        </span> 
                    @endisset
                </li>
            @endforeach
        </ol>

        {{-- Se muestra el título de la última página (Opcional) --}}
        {{-- @if (count($breadcrumbs) > 1)
            <h6 class="font-bold">
                {{ end($breadcrumbs)['name'] }}
            </h6>
                
        @endif --}}
    </nav>
@endif