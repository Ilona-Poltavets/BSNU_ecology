<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    const VALIDATION_RULE=[
        'files' => 'required',
        'files.*' => 'image|mimes:jpg,jpeg,png'
    ];
    public function index()
    {
        $data['images'] = Gallery::orderBy('created_at', 'DESC')->paginate(20);
        return view('gallery.index', $data);
    }
    public function getGallery()
    {
        $data['news']=News::orderby('created_at',"desc")->take(5)->get();
        $data['images'] = json_encode(Gallery::orderBy('created_at', 'DESC')->get());
        return view('gallery', $data);
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), self::VALIDATION_RULE);
        if ($validator->fails()) {
            return redirect('photos/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
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
