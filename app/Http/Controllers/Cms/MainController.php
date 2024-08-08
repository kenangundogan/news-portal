<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;

use App\Models\News;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        $categories = Category::all();
        $images = Image::all();
        $users = User::all();
        return view('cms.pages.main.index.default', compact('news', 'categories', 'images', 'users'));
    }
}
