<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.categories.index',[
            'categories' => $categories
        ]);
    }

    public function create(){
        return view('admin.categories.create');
    }

    public function store(Request $request){
        $request->validate(['name' => 'required|string|max:255']);
        Category::create($request->all());
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully');
    }

    public function edit(Category $category){
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, Category $category){
        $request->validate(['name' => 'required|string|max:255']);
        $category->update($request->all());
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Category deleted successfully');
    }
}
