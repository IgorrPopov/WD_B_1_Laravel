<?php

namespace App\Http\Controllers;

use App\User;

class AdminUsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }


    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }


    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:1', 'max:35'],
            'email' => ['required', 'email']
        ]);

        $user->update($attributes);

        return redirect('/admin/users');
    }


    public function delete(User $user)
    {
        $user->delete();

        return back();
    }


    public function banUser(User $user)
    {
        $user->is_banned = !$user->is_banned;
        $user->save();

        return back();
    }
}
