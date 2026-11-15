<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', ['users' => User::orderBy('full_name')->get()]);
    }

    public function create() { return view('users.form', ['user' => new User]); }

    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->validate(['username' => ['required','string','max:255','unique:users,username'], 'full_name' => ['required','string','max:255']]);
        User::create($data);
        return redirect('/users')->with('success', 'User created successfully.');
    }

    public function edit(User $user) { return view('users.form', compact('user')); }

    public function update(\Illuminate\Http\Request $request, User $user)
    {
        $data = $request->validate(['username' => ['required','string','max:255','unique:users,username,'.$user->id], 'full_name' => ['required','string','max:255']]);
        if ($request->hasFile('avatar')) {
            $request->validate(['avatar' => ['image','max:2048']]);
            $image = \Intervention\Image\Laravel\Facades\Image::read($request->file('avatar'))->scaleDown(width: 600);
            $path = 'avatars/'.$user->id.'.jpg';
            \Illuminate\Support\Facades\Storage::disk('public')->put($path, $image->toJpeg(80));
            $data['avatar'] = $path;
        }
        $user->update($data);
        return redirect('/users')->with('success', 'User updated successfully.');
    }
}
