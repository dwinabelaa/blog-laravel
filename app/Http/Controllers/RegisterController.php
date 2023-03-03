<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:25'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validate['password'] Hash::make($validate['password']);
        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        // $request->session()->flash('success', 'Registration successfull!, please login');
        return redirect('/login')->with('success', 'Registration successfull!, please login');
    }
}
