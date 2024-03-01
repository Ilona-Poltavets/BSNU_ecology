<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    const VALIDATION_RULE = [
        'descriptions' => 'max:255',
        'file' => 'image|mimes:jpg,jpeg,png',
//        'files.*' => 'image|mimes:jpg,jpeg,png'
    ];

    public function index()
    {
        $data['images'] = Gallery::orderBy('created_at', 'DESC')->paginate(20);
        return view('gallery.index', $data);
    }

    public function getGallery()
    {
        $data['news'] = News::orderby('created_at', "desc")->take(5)->get();
        $data['images'] = json_encode(Gallery::orderby('created_at', "desc")->take(4)->get());
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

    public function edit($id)
    {
        $image = Gallery::find($id);
        return view('gallery.edit', compact('image'));
    }

    public function update(Request $request, $id)
    {
        $image = Gallery::find($id);
        $validator = Validator::make($request->all(), self::VALIDATION_RULE);
        if ($validator->fails()) {
            return redirect('photos/' . $id . '/edit')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $rootPath = $image->path;
        if ($request->file('image') != null) {
            Storage::delete($rootPath);
            $image->path = ($request->file)->store("storage/team");
        }
        $image->descriptions = $request->descriptions;
        $image->save();
        return redirect()->route('photos.index')->with('success', 'Image has been edited successfully');
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
        $path = $request->file->store('storage/uploads');
        $image = new Gallery();
        $image->path = $path;
        $image->descriptions = $request->descriptions;
        $image->save();
//        foreach ($request->file('files') as $file) {
//            $path = $file->store('storage/uploads');
//            $image = new Gallery();
//            $image->path = $path;
//            $image->save();
//        }
    }

    function addMore(Request $request)
    {
        $images = json_encode(Gallery::orderby('created_at', "desc")->skip($request->skip)->take(4)->get());
        return response()->json($images);
    }
}
