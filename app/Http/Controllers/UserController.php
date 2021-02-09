<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    function create()
    {

        $roles = Role::all();
        return view('users.add', compact('roles'));
    }

    function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->attach($request->roles);

        toastr()->success('Thêm mới thành công!');

        return redirect()->route('user.index');
    }

    function update($id)
    {
        $user = User::find($id);
        return view('users.update', compact('user'));
    }

    function edit($id, Request $request): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        toastr()->success('Cập nhật thành công!');

        return redirect()->route('user.index');
    }

    function delete($id): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($id);
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('user.index');
    }
}
