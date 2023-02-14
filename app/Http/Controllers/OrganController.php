<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organ;

class OrganController extends Controller
{
    public function index(){

        $allorgans = Organ::all();

        return view('Front-end.Organs.index',compact('allorgans'));
    }
}
