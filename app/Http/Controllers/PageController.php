<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Section;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $menus = Menu::visibility()->order()->get();
        $sections = Section::getActiveIds();

        return view('pages.main', compact('menus', 'sections'));
    }
}
