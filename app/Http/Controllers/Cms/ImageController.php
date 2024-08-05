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
            'image1x1' => 'required|nullable|image|mimes:jpg|max:2048',
            'image1x2' => 'required|nullable|image|mimes:jpg|max:2048',
            'image16x9' => 'required|nullable|image|mimes:jpg|max:2048',
        ]);

        $data = $request->all();
        $time = time();
        $name = $data['name'];
        $extension = '.jpg';
        $fileName = $time . '_' . $name . $extension;
        $data['image'] = $fileName;


        if ($request->hasFile('image1x1')) {
            $image1x1 = $request->file('image1x1');
            $image1x1->move(public_path('images/1x1'), $fileName);
            $data['image1x1'] = $fileName;
        }

        if ($request->hasFile('image1x2')) {
            $image1x2 = $request->file('image1x2');
            $image1x2->move(public_path('images/1x2'), $fileName);
            $data['image1x2'] = $fileName;
        }

        if ($request->hasFile('image16x9')) {
            $image16x9 = $request->file('image16x9');
            $image16x9->move(public_path('images/16x9'), $fileName);
            $data['image16x9'] = $fileName;
        }


        Image::create($data);
        return redirect()->route('images.index')->with('success', 'Image created successfully.');
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
        $image = Image::find($id);
        return view('cms.pages.images.edit.default', compact('image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $validated = $request->validate([
            'name' => 'required',
            'image1x1' => 'nullable|image|mimes:jpg|max:2048',
            'image1x2' => 'nullable|image|mimes:jpg|max:2048',
            'image16x9' => 'nullable|image|mimes:jpg|max:2048',
        ]);

        $image = Image::find($id);
        $time = time();
        $name = $validated['name'];
        $extension = '.jpg';
        $fileName = $time . '_' . $name . $extension;
        $validated['image'] = $fileName;

        // dd(
        //     $image,
        //     $validated['image'],
        //     $request->all(), $validated, $request->hasFile('image16x9')
        // );


        if ($request->hasFile('image1x1')) {
            $image1x1 = $request->file('image1x1');
            $image1x1->move(public_path('images/1x1'), $fileName);
            $validated['image1x1'] = $fileName;
        }

        if ($request->hasFile('image1x2')) {
            $image1x2 = $request->file('image1x2');
            $image1x2->move(public_path('images/1x2'), $fileName);
            $validated['image1x2'] = $fileName;
        }

        if ($request->hasFile('image16x9')) {
            $image16x9 = $request->file('image16x9');
            $image16x9->move(public_path('images/16x9'), $fileName);
            $validated['image16x9'] = $fileName;
        }

        $image->update($validated);

        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Image::find($id);
        $image->delete();
        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }
}
