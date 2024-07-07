<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LikeButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $count,
        public bool $rotate = false,
    )
    {
        $this->count = $count;
        $this->rotate = $rotate;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.like-button');
    }
}