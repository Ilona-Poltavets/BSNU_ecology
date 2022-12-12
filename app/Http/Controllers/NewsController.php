<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    const VALIDATION_RULE = [
        'title_image' => 'mimes:jpg,jpeg,png,webp',
        'titleUkr' => 'required|max:255',
        'titleEng' => 'required|max:255',
        'contentUkr' => 'required|',
        'contentEng' => 'required|',
    ];

    public function index()
    {
        $data['news'] = News::orderBy('created_at', 'DESC')->paginate(10);
        return view('news.index', $data);
    }

    public function viewAll()
    {
        $data['news'] = News::orderBy('created_at', 'DESC')->paginate(9);
        return view('news', $data);
    }

    public function show($id)
    {
        $post = News::find($id);
        return view('news.show', compact('post'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $post = new News();
        $validator = $this->validateData($request);
        if ($validator->fails()) {
            return redirect('news/create')
                ->withErrors($validator)
                ->withInput();
        }
        $this->save($post, $request);

        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $post = News::find($id);
        return view('news.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = News::find($id);
        $validator = $this->validateData($request);
        if ($validator->fails()) {
            return redirect('news/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $this->save($post, $request);

        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        $post = News::find($id);
        Storage::delete($post->title_image);
        $post->delete();
        return redirect()->route('news.index');
    }

    public function upload(Request $request)
    {
        $image = new Gallery();
        $path = ($request->file)->store("storage/uploads");
        $image->path = $path;
        $image->save();

        return response()->json(array('location' => $path));
    }

    function validateData($request)
    {
        $validator = Validator::make($request->all(), self::VALIDATION_RULE);
        return $validator;
    }

    function save($post, $request)
    {
        $rootPath = ($post->title_image == null || $post->title_image == "") ? 'images/No_photo.png' : $post->title_image;
        if ($request->file('title_image') != null) {
            if ($post->title_image != 'images/No_photo.png') {
                Storage::delete($rootPath);
            }
            $rootPath = ($request->title_image)->store("storage/news");
        }

        $post->title_image = $rootPath;
        $post->titleUkr = $request->titleUkr;
        $post->titleEng = $request->titleEng;
        $post->contentUkr = $request->contentUkr;
        $post->contentEng = $request->contentEng;
        $post->save();
    }
}
