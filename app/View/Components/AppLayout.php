<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Closure;

class AppLayout extends Component
{
    public $title = "";
    
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.app');
    }
}
