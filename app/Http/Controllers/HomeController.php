<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lab;
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

        return view('Front-end.Home',compact('labs'));
    }


}
