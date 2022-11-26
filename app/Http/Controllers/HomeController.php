<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

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
        $data['team']=Team::all();
        return view('home',$data);
    }
    public function about(){
        return view('about');
    }
}
