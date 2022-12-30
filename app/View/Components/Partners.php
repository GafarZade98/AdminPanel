<?php

namespace App\View\Components;

use App\Models\Partner;
use Illuminate\View\Component;

class Partners extends Component
{
    public $partners;

    public function __construct()
    {
        $this->partners = Partner::active()->orderBy('ordering')->get();
    }

    public function render()
    {
        return view('website.components.partners');
    }
}
