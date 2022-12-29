<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\View\Component;

class RecentProducts extends Component
{
    public $recentProducts;

    public function __construct()
    {
        $this->recentProducts = Product::active()->inRandomOrder(12)->get();
    }

    public function render()
    {
        return view('website.components.recent-products');
    }
}
