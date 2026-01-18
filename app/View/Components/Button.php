<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $textoBoton;
    public string $tipoBoton;
    public string $ruta;
    public string $claseColor;
    public ?string $icono;
    public string $posicionIcono;
    public string $tamanoBoton;
    public string $claseTamanoBoton;
    public string $claseTamanoIcono;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $textoBoton = 'Nuevo',
        string $tipoBoton = 'primary',
        string $ruta = '#',
        ?string $icono = null,
        string $posicionIcono = 'left',
        string $tamanoBoton = 'normal'
    ) {
        $this->textoBoton = $textoBoton;
        $this->tipoBoton = $tipoBoton;
        $this->ruta = $ruta;
        $this->icono = $icono;
        $this->posicionIcono = $posicionIcono;
        $this->tamanoBoton = $tamanoBoton;

        $estilos = [
            'primary' => 'bg-primary-700 hover:bg-primary-800 focus:ring-primary-500 text-white',
            'secondary' => 'bg-secondary-700 hover:bg-secondary-800 focus:ring-secondary-500 text-white',
            'danger' => 'bg-red-700 hover:bg-red-800 focus:ring-red-500 text-white',
            'success' => 'bg-green-700 hover:bg-green-800 focus:ring-green-500 text-white',
            'warning' => 'bg-yellow-600 hover:bg-yellow-700 focus:ring-yellow-500 text-white',
            'info' => 'bg-gray-100 hover:bg-gray-200 focus:ring-gray-500 text-gray-600 hover:text-gray-700',
        ];

        $tamanos = [
            'small' => 'px-3 py-1 text-sm',
            'normal' => 'px-4 py-2 text-base',
            'large' => 'px-5 py-3 text-lg',
        ];

        $tamanosIconos = [
            'small' => 'w-4 h-4',
            'normal' => 'w-5 h-5',
            'large' => 'w-6 h-6',
        ];

        $this->claseColor = $estilos[$tipoBoton] ?? $estilos['primary'];
        $this->claseTamanoBoton = $tamanos[$tamanoBoton] ?? $tamanos['normal'];
        $this->claseTamanoIcono = $tamanosIconos[$tamanoBoton] ?? $tamanosIconos['normal'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
