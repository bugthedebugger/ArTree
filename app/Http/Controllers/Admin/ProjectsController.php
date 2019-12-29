<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Projectyear;
use App\Models\Event;
use Storage;
use Session;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::orderBy('project_date', 'desc')->paginate(10);
        return view('admin.projects.index', ['projects' => $projects]);
    }

    public function create() {
        $galleryID = Str::uuid();
        $categories = Category::orderBy('name')->get();
        $years = Projectyear::orderBy('year')->get();

        return view('admin.projects.create')
                ->with('galleryID', $galleryID)
                ->with('categories', $categories)
                ->with('years', $years);
    }

    public function store(Request $request, $uuid) {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'date|nullable',
            'location' => 'string|nullable',
            'category' => 'required',
            'project-year' => 'required',
            'event' => 'required',
            'event-location' => 'nullable',
            'event-start-date' => 'nullable',
            'event-end-date' => 'nullable',
            'event-start-time' => 'nullable',
            'event-end-time' => 'nullable',
            'event-entry-fee' => 'nullable',
            'featured' => 'required|mimes:jpeg,jpg,png,gif,svg|max:10000',
            'blog' => 'required',
        ]);

        $name = $request->name;
        $project_date = $request->date;
        $location = $request->location;
        $category = $request->category;
        $project_year = $request['project-year'];
        $event = $request->event == 'yes'? true: false;
        $event_location = $request['event-location'];
        $event_start_date = $request['event-start-date'];
        $event_end_date = $request['event-end-date'];
        $event_start_time = $request['event-start-time'];
        $event_end_time = $request['event-end-time'];
        $event_entry_fee = $request['event-entry-fee'];
        $featured = $request->featured;
        $blog = $request->blog;

        $upload_path = 'public/uploads';
        // dd($request->all());

        \DB::beginTransaction();
        try {
            $file = $featured->store($upload_path);
            $file_path = Storage::url($file);
            $project = Project::create([
                'name' => $name,
                'project_date' => $project_date,
                'location' => $location,
                'event' => $event,
                'featured' => $file_path,
                'body' => $blog,
                'hidden' => false,
                'category_id' => $category,
                'projectyear_id' => $project_year,
                'uuid' => $uuid,
            ]);
            if ($event) {
                $project->event()->create([
                    'location' => $event_location,
                    'start_date' => $event_start_date,
                    'end_date' => $event_end_date,
                    'start_time' => $event_start_time,
                    'end_time' => $event_end_time,
                    'entry_fee' => $event_entry_fee,
                ]);
            }
            \DB::commit();
            Session::flash('success', 'Project Saved!');
        } catch (\Exception $e) {
            \DB::rollback();
            \Log::error($e);
            Session::flash('error', $e->getMessage());
        }
        return redirect()->back();
    }
}
