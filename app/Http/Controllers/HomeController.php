<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\Team;
use Illuminate\Http\Request;
use Nette\Utils\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['news']=News::orderby('created_at',"desc")->take(5)->get();
        $data['team']=Team::all();
        $data['images']=json_encode(Gallery::orderby('created_at','desc')->get());
        return view('home',$data);
    }
    public function about(){
        return view('about');
    }
}
