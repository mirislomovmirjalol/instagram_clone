<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(\App\Models\User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(\App\Models\User $user)
    {
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
    }
    public function update(\App\Models\User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->validate([
            'title' => 'required',
            'description' => '',
            'url' => 'url',
            'image' => '',
        ]);

        auth()->user()->profile->update($data);
        return redirect("/profile/{$user->id}");
    }

}
