<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }

    function create(){

        $roles = Role::all();
        return view('users.add',compact('roles'));
    }

    function delete($id): \Illuminate\Http\RedirectResponse
    {
        $user = User::find($id);
        $user->roles()->detach();
        $user->delete();

        return redirect()->route('user.index');
    }
}
