<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Section;
use App\Models\SiteTranslation;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $menus = Menu::visibility()->order()->get();
        $sections = Section::getActiveIds();
        $site_translations = (object)SiteTranslation::homeTranslations()->get()->pluck('value', 'key')->toArray();

        return view('pages.main', compact('menus', 'sections', 'site_translations'));
    }
}
