<?php

namespace App\Http\Controllers\ThemeOne;
use App\Http\Controllers\Controller;

use App\Models\News;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('category')->get();
        $categories = Category::all();
        $categories = $categories->whereIn('id', $news->pluck('category_id'));
        return view('theme-one.pages.main.index.default', compact('news', 'categories'));
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
    public function show(int $id, string $slug)
    {
        $news = News::with('category')->get();
        $news = $news->where('id', $id)->first();
        $imagePath = 'resources/images/16x9/' . $news->image->name . '.jpg';
        $news->image_url = $imagePath;
        $relatedNews = News::with('category')->get()->where('category_id', $news->category_id)->where('id', '!=', $id);
        return view('theme-one.pages.main.show.default', compact('news', 'relatedNews'));
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

    /**
     * Search for news.
     */
    public function search(Request $request)
    {
        $news = News::with('category')
        ->where('title', 'like', '%' . $request->search . '%')
        ->get();
        $categories = Category::all();
        $categories = Category::all();
        $categories = $categories->whereIn('id', $news->pluck('category_id'));
        return view('theme-one.pages.main.index.default', compact('news', 'categories'));
    }
}
