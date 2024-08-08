<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use App\Models\Image;
use App\Models\NewsContentType;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('category')->get()->reverse();
        return view('cms.pages.news.index.default', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $images = Image::all();
        $categories = Category::all();
        $contentTypes = NewsContentType::all();
        return view('cms.pages.news.create.default', compact('images', 'categories', 'contentTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_id' => 'required|exists:images,id',
            'category_id' => 'required|exists:categories,id',
        ]);

        $news = News::create($request->only(['title', 'description', 'image_id', 'category_id']));

        $this->handleContents($request, $news);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::with('contents')->findOrFail($id);
        $images = Image::all();
        $categories = Category::all();
        $contentTypes = NewsContentType::all();
        return view('cms.pages.news.edit.default', compact('news', 'images', 'categories', 'contentTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_id' => 'required|exists:images,id',
            'category_id' => 'required|exists:categories,id',
            'contents' => 'array',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->only(['title', 'description', 'image_id', 'category_id']));

        $news->contents()->delete();
        $this->handleContents($request, $news);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        $news->contents()->delete();
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }

    /**
     * Handle the contents of the news.
     */
    protected function handleContents(Request $request, News $news)
    {
        if (!$request->has('contents')) {
            return;
        }

        foreach ($request->contents as $index => $content) {
            $contentData = [
                'news_content_type_id' => $content['type_id'],
                'content' => isset($content['content']) ? $content['content'] : ''
            ];

            if ($request->hasFile("contents.$index.file") && $request->file("contents.$index.file")->isValid()) {
                $file = $request->file("contents.$index.file");
                $time = time();
                $randomNumber = rand(100000, 999999);
                $fileExtension = $file->getClientOriginalExtension();
                $fileName = "{$time}_{$randomNumber}.{$fileExtension}";
                $destinationPath = public_path('/images/other');
                $file->move($destinationPath, $fileName);
                $contentData['content'] = 'images/other/' . $fileName;
            } elseif (isset($content['existing_file'])) {
                $contentData['content'] = $content['existing_file'];
            }

            $news->contents()->create($contentData);
        }
    }
}
