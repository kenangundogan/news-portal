<?php

namespace App\Http\Controllers\ThemeOne;
use App\Http\Controllers\Controller;

use App\Models\News;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $category)
    {
        $categoryName = $category;
        $categories = Category::all();
        $categories = $categories->whereIn('id', News::all()->pluck('category_id'));
        $category = $categories->where('slug', $categoryName);
        if ($category == null || $category->count() == 0) {
            return abort(404);
        }
        $category = $category->first()->id;
        $news = News::all()->where('category_id', $category);

        return view('theme-one.pages.main.index.default', compact('news', 'categories', 'categoryName'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
