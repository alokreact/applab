<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organ;

class OrganController extends Controller
{
    public function index(){

        $allorgans = Organ::all();
        //dd($allorgans);
        return view('Front-end.Organs.index',compact('allorgans'));
    }

    public function findTestbyOrgan($id){

        $testsbyOrgan = Organ::find($id);
        
        $subtests= $testsbyOrgan->subtest;
       // dd($subtests);

        return view('Front-end.Organs.testbyorgan',compact('testsbyOrgan','subtests'));
    }
}
