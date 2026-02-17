<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $categories = ['residential', 'commercial', 'public', 'interior'];

        $projects = Project::ordered()
            ->when($category, fn ($q) => $q->byCategory($category))
            ->get();

        return view('pages.projects', compact('projects', 'categories', 'category'));
    }

    public function show(Project $project)
    {
        $related = Project::where('category', $project->category)
            ->where('id', '!=', $project->id)
            ->ordered()
            ->take(2)
            ->get();

        return view('pages.project-detail', compact('project', 'related'));
    }
}
