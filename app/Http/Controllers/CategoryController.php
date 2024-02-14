<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');

        $category->save();

        return redirect('/category')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified category.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the catergory.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified category.
     */
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name'=> $request->input('name'),
            'description'=> $request->input('description'),
        ]);
        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified category.
     */
    public function destroy($category_id)
    {
        $company = Category::where('category_id', $category_id)->firstOrFail();
        $company->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
