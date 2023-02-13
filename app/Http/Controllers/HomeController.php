<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lab;

use App\Models\Organ;

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

        $labs = Lab::orderBy('created_at', 'desc')->get();
      
        $organs = Organ::take(12)->get();


        return view('Front-end.Home',compact('labs','organs'));
    }


}
