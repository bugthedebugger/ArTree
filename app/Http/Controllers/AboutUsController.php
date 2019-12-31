<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AboutUsController extends Controller
{
    public function index() {
        $settings = Setting::first();
        return view('about.index', ['settings' => $settings]);
    }
}
