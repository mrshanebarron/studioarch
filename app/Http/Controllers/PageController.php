<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TeamMember;

class PageController extends Controller
{
    public function home()
    {
        $featured = Project::featured()->ordered()->take(4)->get();
        $categories = Project::selectRaw('category, count(*) as count')
            ->groupBy('category')
            ->pluck('count', 'category');

        return view('pages.home', compact('featured', 'categories'));
    }

    public function about()
    {
        $team = TeamMember::ordered()->get();
        $projectCount = Project::count();

        return view('pages.about', compact('team', 'projectCount'));
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
