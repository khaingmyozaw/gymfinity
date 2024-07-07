<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $specifications,
        // public string $reviews,
        public string $shipping,
    )
    {
        $this->specifications = $specifications;
        // $this->reviews = $reviews;
        $this->shipping = $shipping;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tab-component');
    }
}
