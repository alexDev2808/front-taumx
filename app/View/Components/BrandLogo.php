<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BrandLogo extends Component
{
    public string $tamanoLogo;
    public string $claseTamanoLogo;
    
    /**
     * Create a new component instance.
     */
    public function __construct(string $tamanoLogo = 'base')
    {
        $this->tamanoLogo = $tamanoLogo;

        $tamanosLogo = [
            'xs' => 'h-6',
            'sm' => 'h-8',
            'base' => 'h-12',
            'lg' => 'h-16',
            'xl' => 'h-20',
        ];

        $this->claseTamanoLogo = $tamanosLogo[$tamanoLogo] ?? $tamanosLogo['base'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.brand-logo');
    }
}
