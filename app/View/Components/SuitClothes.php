<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SuitClothes extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $image,
        public string $name,
        public string $code,
        public string $type,
        public string $price,
        public $colors,
        public $sizes,
    )
    {
        $this->image = $image;
        $this->name = $name;
        $this->code = $code;
        $this->type = $type;
        $this->price = $price;
        $this->colors = $colors;
        $this->sizes = $sizes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.suit-clothes');
    }
}
