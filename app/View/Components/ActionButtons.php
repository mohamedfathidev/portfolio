<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ActionButtons extends Component
{
    /**
     * Create a new component instance.
     */
    public $id;
    public $deleteRouteProperty;
    public $editRouteProperty;

    public function __construct($id, $deleteRoute = null, $editRoute = null)
    {
        $this->id = $id;
        $this->deleteRouteProperty = $deleteRoute;
        $this->editRouteProperty = $editRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-buttons');
    }
}
