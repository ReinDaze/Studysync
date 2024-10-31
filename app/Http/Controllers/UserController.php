<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'photo' => 'nullable|image|max:2048',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'school_origin' => 'required',
        ]);

        $data = $request->only(['name', 'email', 'birth_place', 'birth_date', 'school_origin']);
        $data['password'] = Hash::make($request->password);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('profile_photos', 'public');
        }

        $user = User::create($data);

        return response()->json($user, 201);
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'photo' => 'nullable|image|max:2048',
            'birth_place' => 'required',
            'birth_date' => 'required|date',
            'school_origin' => 'required',
        ]);

        $data = $request->only(['name', 'email', 'birth_place', 'birth_date', 'school_origin']);

        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }
            $data['photo'] = $request->file('photo')->store('profile_photos', 'public');
        }

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return response()->json($user, 200);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->photo) {
            Storage::disk('public')->delete($user->photo);
        }

        $user->delete();

        return response()->json(null, 204);
    }
}
