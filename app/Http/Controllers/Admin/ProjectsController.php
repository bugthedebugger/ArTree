<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index() {
        return view('admin.projects.index');
    }

    public function create() {
        $galleryID = Str::uuid();

        return view('admin.projects.create')
                ->with('galleryID', $galleryID);
    }
}
