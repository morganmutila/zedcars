<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SimpleLayout extends Component
{
    public $title = "";

    
    public function render(): View|Closure|string
    {
        return view('layouts.simple');
    }
}
