<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner extends Component
{
    public $banners;

    public function __construct()
    {
        $this->banners = \App\Models\Banner::active()->orderBy('ordering')->get();
    }

    public function render()
    {
        return view('website.components.banner');
    }
}
