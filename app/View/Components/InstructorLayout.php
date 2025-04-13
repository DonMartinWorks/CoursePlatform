<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InstructorLayout extends Component
{
    /**
     * The page title.
     *
     * @var string
     */
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $title
     */
    public function __construct(?string $title = null)
    {
        $this->title = $title ?? __('Page');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.instructor')->with([
            'title', $this->title
        ]);
    }
}
