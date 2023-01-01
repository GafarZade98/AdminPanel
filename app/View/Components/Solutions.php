<?php

namespace App\View\Components;

use App\Models\Solution;
use Illuminate\View\Component;

class Solutions extends Component
{

    public $solutions;

    public function __construct()
    {
        $this->solutions = Solution::active()->inRandomOrder(2);
    }

    public function render()
    {
        return view('website.components.solutions');
    }
}
