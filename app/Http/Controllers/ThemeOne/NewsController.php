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
     * Category news.
     */
    public function category(string $category)
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
