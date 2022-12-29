<?php

namespace App\View\Components;

use App\Models\Solution;
use Illuminate\View\Component;

class Solutions extends Component
{

    public $solutions;

    public function __construct()
    {
        $this->solutions = Solution::active()->get();
    }

    public function render()
    {
        return view('website.components.solutions');
    }
}
