<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::latest()->paginate(10);
        return view('categories.index',['categories'=>$categories]);
    }
    public function create(){
        return view('categories.create');
    }
    public function store(Request $request, category $category){
        $this->validate($request,[
            'name'=>['required',Rule::unique('categories','name')]
        ]);
        $category->name = $request['name'];
        $category->save();
        return redirect()->to('/categories');
    }
    public function edit(category $category){
        return view('categories.edit',['category'=>$category]);
    }
    public function update(Request $request, category $category){
        $attributes = $this->validate($request,[
            'name'=>['required']
        ]);
        $category->name = $request['name'];
        $category->update($attributes);
        return redirect()->to('/categories');
    }
}
