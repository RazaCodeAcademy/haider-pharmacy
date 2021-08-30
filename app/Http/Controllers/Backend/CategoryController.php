<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// include models
use App\Models\Category; 

// use facades
use Storage;
use Illuminate\Http\File;

class CategoryController extends Controller
{
    //display all categories here.
    public function getAllCategories(){
        return view('backend.pages.categories.index');
    }

    //display create new category form here.
    public function createCategory(){
        return view('backend.pages.categories.create');
    }

    //save new category here.
    public function saveCategory(Request $request){
        // return $request->all();

        // dd($request->file);

        $categoryFolder = 'category';
        if (!Storage::exists($categoryFolder)) {
            Storage::makeDirectory($categoryFolder);
        }

        if ($request->hasFile('file')) {
            $image = Storage::putFile($categoryFolder, new File($request->file('file')[0]));
        }

        $categoryData = [
            'title' => $request->title,
            'description' => $request->description,
            'thumbnail' => $image,
        ];

        $category = Category::create($categoryData);

        // return response()->json($category, 200);
        // return redirect()->route('categories.getAllCategories');
    }

    //display edit existing category form here.
    public function editCategory(){
        return view('backend.pages.categories.edit');
    }

    //update existing category data here.
    public function updateCategory(){
        return view('backend.pages.categories.edit');
    }

    //delete existing category data here.
    public function deleteCategory(){
        return view('backend.pages.categories.edit');
    }
}
