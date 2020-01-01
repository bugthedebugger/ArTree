<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class LandingPageController extends Controller
{
    public function index() {
        $featuredProject = Project::where('hidden', false)->orderBy('project_date', 'desc')->first();
        $projects = Project::where('hidden', false)->orderBy('project_date', 'desc')->take(4)->get();
        $latestEvent = Project::orderBy('project_date', 'desc')
                                ->where([
                                    ['event', '=', true],
                                    ['hidden', '=', false]
                                ])
                                ->first();
        return view('index')
                ->with('featuredProject', $featuredProject)
                ->with('projects', $projects)
                ->with('latestEvent', $latestEvent);
    }
}
