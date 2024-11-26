<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class App extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.layouts.app');  // Change to match the actual view path
    }
}