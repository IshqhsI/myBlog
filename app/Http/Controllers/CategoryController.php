<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){

        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'unique:categories,name'],
            'description' => 'required',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('/categories')->with('success', 'Category created successfully.');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string', 'unique:categories,name,'.$id],
            'description' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        return redirect('/categories')->with('success', 'Category updated successfully.');
    }

    public function show($id){
        $category = Category::find($id);
        return view('category.show', compact('category'));
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories')->with('success', 'Category deleted successfully.');
    }
}
