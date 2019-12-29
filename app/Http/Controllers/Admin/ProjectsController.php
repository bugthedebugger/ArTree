<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        return view('admin.projects.projects');
    }

    public function create() {
        return view('admin.projects.create');
    }
}
