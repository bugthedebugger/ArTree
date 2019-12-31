<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {
        return view('admin.team.index');
    }

    public function create() {
        return view('admin.team.create');
    }
}
