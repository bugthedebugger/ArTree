<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projectyear;
use Session;

class ProjectYearsController extends Controller
{
    public function index() {
        $projectYears = Projectyear::orderBy('year')->paginate(10);
        return view('admin.project-year.index', ['projectYears' => $projectYears]);
    }

    public function create() {
        return view('admin.project-year.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'year' => 'required|unique:projectyears|digits:4'
        ]);

        \DB::beginTransaction();
        try {
            Projectyear::create([
                'year' => $request->year,
            ]);
            \DB::commit();
        } catch (Exception $e) {
            \DB::rollback();
            \Log::error($e);
            Session::flash('error', $e->getMessage());
        }
        Session::flash('success', 'Project year added successfully!');
        return redirect()->back();
    }
}
