<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * The page title.
     *
     * @var string
     */
    public $title;

    /**
     * The breadcrumb items.
     *
     * @var array
     */
    public $breadcrumb;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param array $breadcrumb
     */
    public function __construct(?string $title = null, array $breadcrumb = [])
    {
        // Assign the title to the component property, using a default if none is provided.
        $this->title = $title ?? __('Page');
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.admin')->with([
            'title', $this->title,
            'breadcrumb' => $this->breadcrumb,

        ]);
    }
}
