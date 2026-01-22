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
            'primary' => 'bg-primary-600 hover:bg-primary-700 text-white',
            'secondary' => 'bg-secondary-600 hover:bg-secondary-700 text-white',
            'danger' => 'bg-error-500 hover:bg-error-600 text-white',
            'success' => 'bg-success-500 hover:bg-success-600 text-white',
            'warning' => 'bg-warning-500 hover:bg-warning-600 text-white',
            'info' => 'bg-secondary-100 text-gray-700 hover:text-gray-900 border border-gray-300',
        ];

        $tamanos = [
            'small' => 'px-3 py-1 text-xs',
            'normal' => 'px-4 py-2 text-sm',
            'large' => 'px-5 py-3 text-md',
            'full' => 'md:w-full px-4 py-2 text-sm',
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
