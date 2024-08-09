<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all()->reverse();
        return view('cms.pages.images.index.default', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.pages.images.create.default');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image1x1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1x2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image16x9' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only('name');
        $data['image1x1'] = $this->uploadImage($request, 'image1x1', '1x1');
        $data['image1x2'] = $this->uploadImage($request, 'image1x2', '1x2');
        $data['image16x9'] = $this->uploadImage($request, 'image16x9', '16x9');

        Image::create($data);

        return redirect()->route('images.index')->with('success', 'Image created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = Image::findOrFail($id);
        return view('cms.pages.images.edit.default', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'image1x1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1x2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image16x9' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = Image::findOrFail($id);

        $data = $request->only('name');
        if ($request->hasFile('image1x1')) {
            $data['image1x1'] = $this->uploadImage($request, 'image1x1', '1x1');
        }
        if ($request->hasFile('image1x2')) {
            $data['image1x2'] = $this->uploadImage($request, 'image1x2', '1x2');
        }
        if ($request->hasFile('image16x9')) {
            $data['image16x9'] = $this->uploadImage($request, 'image16x9', '16x9');
        }

        $image->update($data);

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }

    /**
     * Handle image upload and return the filename.
     */
    protected function uploadImage(Request $request, $fieldName, $directory)
    {
        $file = $request->file($fieldName);
        $time = time();
        $randomNumber = rand(100000, 999999);
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = "{$time}_{$randomNumber}.{$fileExtension}";
        $destinationPath = public_path("images/{$directory}");
        $file->move($destinationPath, $fileName);
        return $fileName;
    }
}
