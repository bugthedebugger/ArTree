<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class LandingPageController extends Controller
{
    public function index() {
        $featuredProject = Project::orderBy('project_date', 'desc')->first();
        $projects = Project::orderBy('project_date', 'desc')->all();
        return view('index')
                ->with('featuredProject', $featuredProject);
    }
}
