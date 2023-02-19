<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubTest;

use App\Models\Lab;

class LabPackageController extends Controller
{
    public function store(Request $request){

       // dd($request->all());
        $price = collect($request->input('price',[]))
                        ->map(function($subtests){
                            return ['price'=>$subtests];
                        });
        $lab = Lab::find($request->input('lab_id'));
        $lab->subtest()->sync( $price );
        return redirect()->back()->with('message','Added succesfully');               
    }

    public function create(){
        $labs = Lab::all();
       
        $subtests = SubTest::all();
       
        return view('Admin.Labpackage.index',compact('subtests','labs'));
        
    }
}
