<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use App\Models\Gallery;
use Session;
use Validator;

class GalleryController extends Controller
{
    public function getImages($id) {
        $gallery = Gallery::where('uuid', $id)->get();
        return view('admin.projects.gallery', ['gallery' => $gallery]);
    }

    public function uploadFile(Request $request, $id) {
        
        $storage_path = 'public/uploads';
        $photos = $request->photos;

        $rules = [
            'photos' => 'required|array',
            'photos.*' => 'mimes:jpeg,jpg,png,gif,svg|max:10000',
        ];
        $validator = Validator::make(['photos' => $photos], $rules);

        if ($validator->fails()) {
            return $validator->errors()->getMessages();
        }

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
            return '<div class="text-danger">'.$e->getMessage().'</div>';
        }
        
        $gallery = Gallery::where('uuid', $id)->get();
        return view('admin.projects.gallery', ['gallery' => $gallery]);
    }
}
