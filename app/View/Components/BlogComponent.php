<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $category,
        public string $date,
        public string $image,
        public string $title,
        public string $contents,
        public int $comments,
        public int $likes,
    )
    {
        $this->category = $category;
        $this->date = $date;
        $this->image = $image;
        $this->title = $title;
        $this->contents = $contents;
        $this->comments = $comments;
        $this->likes = $likes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-component');
    }
}
