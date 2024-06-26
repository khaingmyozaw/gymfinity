<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FAQComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $contents,
    )
    {
        $this->title = $title;
        $this->contents = $contents;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.f-a-q-component');
    }
}
