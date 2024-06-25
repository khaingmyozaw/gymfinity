<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ItemsComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $name,
        public string $code,
        public string $price,
        public int | float $weight,
        public $colors,
    )
    {
        $this->image = $image;
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->colors = $colors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.items-component');
    }
}
