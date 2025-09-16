<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use Closure;

class GuestLayout extends Component
{
    public $title = "";
    
    public function render(): View|Closure|string
    {
        return view('layouts.guest');
    }
}
