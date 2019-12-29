<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::orderBy('name')->paginate(10);
        return view('admin.categories.index', ['categories' => $categories]);    
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:5',
        ]);
        
        \DB::beginTransaction();
        try {
            Category::create([
                'name' => $request->name,
            ]);
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            \Log::error($e);
            Session::flash('error', $e->getMessage());
        }
        Session::flash('success', 'Category added successfully!');
        return redirect()->back();
    }
}
