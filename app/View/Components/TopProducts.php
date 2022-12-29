<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class TopProducts extends Component
{
    public $products;

    public function __construct()
    {
        $this->products = Product::active()->inRandomOrder(10)->get();
    }

    public function render()
    {
        return view('website.components.top-products');
    }
}
