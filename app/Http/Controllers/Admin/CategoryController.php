<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryCreateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return  view('Admin.Category.create');
    }
    public function  index(){

        $categories = Category::all();

        return  view('Admin.Category.index',compact('categories'));
    }
    public function store(CategoryCreateRequest $request){
        
        $data = $request->all();

        Category::create($data);
        return redirect()->back()->with('message', 'Test added successfully');
    }

}
