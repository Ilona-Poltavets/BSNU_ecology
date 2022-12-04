<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $data['images'] = Gallery::paginate(20);
        return view('gallery.index', $data);
    }
//    public function show(){
//        $data['images']=Gallery::paginate(9);
//        return view('gallery',$data);
//    }
    public function getGallery()
    {
        $data['images'] = Gallery::orderBy('created_at', 'DESC')->paginate(16);
        return view('gallery', $data);
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $this->saveData($request);
        return redirect()->route('photos.index');
    }

    public function destroy($id)
    {
        $image = Gallery::find($id);
        Storage::delete($image->path);
        $image->delete();
        return redirect()->route('photos.index');
    }

    function saveData($request)
    {
        foreach ($request->file('files') as $file) {
            $path = $file->store('storage/uploads');
            $image = new Gallery();
            $image->path = $path;
            $image->save();
        }
    }
}
