<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResourceController extends Controller
{
    const VALIDATION_RULE=[
        'files' => 'required',
        'files.*' => 'mimes:pdf,pptx'
    ];
    public function index()
    {
        $data['resources'] = Resource::paginate(20);
        return view('resources.index', $data);
    }

    public function getResources($type)
    {
        $data['news']=News::orderby('created_at',"desc")->take(5)->get();
        $data['files']=Resource::where('type',$type)->orderBy('created_at')->paginate(10);
        return view('resource',$data);
    }

    public function create()
    {
        return view('resources.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), self::VALIDATION_RULE);
        if ($validator->fails()) {
            return redirect('resource/create')
                ->withErrors($validator->errors())
                ->withInput();
        }
        $this->saveData($request);
        return redirect()->route('resource.index');
    }

    function saveData($request)
    {
        foreach ($request->file('files') as $file) {
            $path = $file->storeAs('storage/resources', $file->getClientOriginalName());
            $type = $file->extension();
            $resource = new Resource();
            $resource->name = $file->getClientOriginalName();
            $resource->path = $path;
            $resource->type = $type;
            $resource->save();
        }
    }

    public function destroy($id)
    {
        $file = Resource::find($id);
        Storage::delete($file->path);
        $file->delete();
        return redirect()->route('resource.index');
    }
}
