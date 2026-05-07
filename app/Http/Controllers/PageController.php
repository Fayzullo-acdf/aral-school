<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Section;
use App\Models\SiteTranslation;
use App\Models\Team;
use App\Models\FAQ;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $menus = Menu::visibility()->order()->get();
        $sections = Section::getActiveIds();
        $site_translations = (object)SiteTranslation::homeTranslations()->isPublished()->get()->pluck('value', 'key')->toArray();
        $team = Team::team()->active()->sorted()->get();
        $mentors = Team::mentor()->active()->sorted()->get();
        $faqs = FAQ::posSort()->sorted()->get();

        return view('pages.main', compact('menus', 'sections', 'site_translations', 'team', 'mentors', 'faqs'));
    }
}
