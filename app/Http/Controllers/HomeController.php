<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lab;

use App\Models\Organ;
use App\Models\SubTest;

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
    public function index(){

        $labs = Lab::orderBy('created_at', 'desc')->get();
        $organs = Organ::take(12)->get();
        return view('Front-end.Home',compact('labs','organs'));
    }
    public function getlistofajaxSubtest(Request $request){       
        if(isset($request->q)){
            $subtests = SubTest::where('sub_test_name', 'like', '%' . $request->q . '%')->get();
        }
        else{
            $subtests = Subtest::all();
        }
        return  response()->json($subtests,200);
    }

    public function searchsubtest(Request $request){

        $labs = SubTest::with('getLab')->find($request->input('subtest'));

        return  view('Front-end.Labs.index',compact('labs'));

       // dd($labs);

    }


}
