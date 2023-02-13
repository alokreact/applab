<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryCreateRequest;


class CategoryController extends Controller
{
    public function create(){
        return  view('Admin.Category.create');
    }
    public function  index(){
        return  view('Admin.Category.index');

    }

    public function store(CategoryCreateRequest $request){
        

        $data = $request->all();

        Category::create($data);

        return redirect()->back()->with('message', 'Test added successfully');
    }


}
