<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GoogleAds extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.google-ads');
    }
}