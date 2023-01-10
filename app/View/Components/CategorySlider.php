<?php

namespace App\View\Components;

use App\Models\Category;
use Illuminate\View\Component;

class CategorySlider extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::active()->take(6)->get();
    }

    public function render()
    {
        return view('website.components.category-slider');
    }
}
