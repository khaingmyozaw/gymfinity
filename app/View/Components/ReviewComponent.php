<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $date,
        public string $message,
        public $avatar,
    )
    {
        $this->name = $name;
        $this->date = $date;
        $this->message = $message;
        $this->avatar = $avatar;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.review-component');
    }
}
