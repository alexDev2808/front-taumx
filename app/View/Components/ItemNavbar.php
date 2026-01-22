<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemNavbar extends Component
{
    public string $ruta;
    public string $icono;
    public string $nombre;
    /**
     * Create a new component instance.
     */
    public function __construct(string $ruta = '#', string $icono, string $nombre)
    {
        $this->ruta = $ruta;
        $this->icono = $icono;
        $this->nombre = $nombre;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.item-navbar');
    }
}
