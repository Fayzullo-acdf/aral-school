<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class head extends Component
{
    public $menus;
    public $site_translations;

    public function __construct($menus, $site_translations = [])
    {
        $this->menus = $menus;
        $this->site_translations = $site_translations;
    }


    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}
