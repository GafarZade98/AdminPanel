<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadcrumbLink extends Component
{
    public $isCurrent;
    public $link = null;

    public function __construct($link = null)
    {
        $this->isCurrent = is_null($link);
        $this->link = $link;
    }

    public function render()
    {
        return view('admin.components.breadcrumb-link');
    }
}
