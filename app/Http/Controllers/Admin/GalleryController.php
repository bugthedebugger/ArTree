<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function getImages($id) {
        return view('admin.projects.gallery');
    }

    public function uploadFile(Request $request, $id) {
        
        $storage_path = 'public/uploads';
        $photos = $request->photos;

        \DB::beginTransaction();
        try{
            foreach($photos as $photo) {
                $path = $photo->store($storage_path);
                $file_path = Storage::url($path);
                Gallery::create([
                    'uuid' => $id,
                    'path' => $file_path,
                ]);
            }
            \DB::commit();
        } catch (\Exception $e) {
            \DB::rollback();
            Session::flash('error', 'Error uploading images!');
            return '<div class="text-danger">'.$e.getMessage().'</div>';
        }
        
        $gallery = Gallery::where('uuid', $id)->get();
        return view('admin.projects.gallery', ['gallery' => $gallery]);
    }
}
