<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    const VALIDATION_RULE = [
        'nameUkr' => 'required',
        'nameEng' => 'required',
        'rankUkr' => 'required',
        'rankEng' => 'required',
        'aboutUkr' => 'required',
        'aboutEng' => 'required',
    ];
    public function index(){
        $data['teamMembers'] = Team::paginate(10);
        return view("team.index",$data);
    }
    public function show(){

    }
    public function create(){
        return view("team.create");
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), self::VALIDATION_RULE);
        if ($validator->fails()) {
            return redirect('team/create')
                ->withErrors($validator)
                ->withInput();
        }
        $member = new Team();

        $rootPath = 'images/No_photo.png';
        if ($request->file('image') != null) {
            $member->image = ($request->image)->store("storage/team");
        }else{
            $member->image=$rootPath;
        }

        $member->nameUkr = $request->nameUkr;
        $member->nameEng = $request->nameEng;
        $member->rankUkr = $request->rankUkr;
        $member->rankEng = $request->rankEng;
        $member->aboutUkr = $request->aboutUkr;
        $member->aboutEng = $request->aboutEng;
        $member->save();

        return redirect()->route('team.index')->with('success', 'Team member has been created successfully');
    }
    public function edit($id){
        $member=Team::find($id);
        return view("team.edit",compact('member'));
    }
    public function update(Request $request,$id){
        $member=Team::find($id);
        $validator = Validator::make($request->all(), self::VALIDATION_RULE);
        if ($validator->fails()) {
            return redirect('team/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $rootPath = $member->image;
        if ($request->file('image') != null) {
            Storage::delete($rootPath);
            $member->image = ($request->image)->store("storage/team");
        }

        $member->nameUkr = $request->nameUkr;
        $member->nameEng = $request->nameEng;
        $member->rankUkr = $request->rankUkr;
        $member->rankEng = $request->rankEng;
        $member->aboutUkr = $request->aboutUkr;
        $member->aboutEng = $request->aboutEng;
        $member->save();

        return redirect()->route('team.index')->with('success', 'Team member has been edited successfully');
    }
    public function destroy(){

    }
}
