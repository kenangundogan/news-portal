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
        $newsContentTypes = NewsContentType::all();
        $fileContentTypes = $newsContentTypes->filter(function ($item) {
            return $item->type == 'file';
        });
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image_id' => 'required|exists:images,id',
            'category_id' => 'required|exists:categories,id'
        ]);

        $news = News::create($request->only(['title', 'description', 'image_id', 'category_id']));

        if (!$request->has('contents')) {
            return redirect()->route('news.index')->with('success', 'News created successfully.');
        }

        foreach ($request->contents as $index => $content) {
            $contentData = [
                'news_content_type_id' => $content['type_id'],
                'content' => isset($content['content']) ? $content['content'] : ''
            ];

            if ($request->hasFile("contents.$index.file") && $request->file("contents.$index.file")->isValid()) {
                $file = $request->file("contents.$index.file");
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/other'), $fileName);
                $contentData['content'] = 'images/other/' . $fileName;
            }

            $news->contents()->create($contentData);
        }


        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
            'contents' => 'required|array'
        ]);

        $news = News::findOrFail($id);
        $news->update($request->only(['title', 'description', 'image_id', 'category_id']));

        $news->contents()->delete();

        foreach ($request->contents as $index => $content) {
            $contentData = ['news_content_type_id' => $content['type_id']];

            if (isset($content['file']) && $request->hasFile("contents.$index.file") && $request->file("contents.$index.file")->isValid()) {
                $file = $request->file("contents.$index.file");
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images/other'), $fileName);
                $contentData['content'] = 'images/other/' . $fileName;
            } elseif (isset($content['existing_file'])) {
                $contentData['content'] = $content['existing_file'];
            } else {
                $contentData['content'] = $content['content'];
            }

            $news->contents()->create($contentData);
        }

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::find($id);
        $news->contents()->delete();
        $news->delete();
        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}
