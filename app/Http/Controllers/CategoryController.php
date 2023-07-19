<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;


class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request){
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->book = $request->book;
        $category->save();

        return redirect('category')->with('message', 'Category Added Successfully');

    }

   
}

