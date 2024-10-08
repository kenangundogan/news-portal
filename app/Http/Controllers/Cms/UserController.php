<?php

namespace App\Http\Controllers\Cms;
use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all()->reverse();
        return view('cms.pages.users.index.default', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.pages.users.create.default');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if ($validated['image']) {
            $image = $request->file('image');
            $time = time();
            $randomNumber = rand(100000, 999999);
            $fileExtension = $image->getClientOriginalExtension();
            $fileName = "{$time}_{$randomNumber}.{$fileExtension}";
            $destinationPath = public_path('/images/avatar');
            $image->move($destinationPath, $fileName);
            $validated['image'] = $fileName;
        }

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect('/cms/users')->with('success', 'User created successfully.');
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
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('cms.pages.users.edit.default', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'city' => 'required',
            'country' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/avatar');
            $image->move($destinationPath, $name);
            $validated['image'] = $name;
        } else {
            $validated['image'] = $user->image;
        }

        $user->update($validated);
        return redirect('/cms/users')->with('success', 'User updated successfully.');
    }

    public function updatepassword(Request $request, User $user)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect("/cms/users/{$user->id}")->with('success', 'Password updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/cms/users')->with('success', 'User deleted successfully.');
    }
}
