<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('Register.index', [
                'title' => 'Register',
                'active' => 'Register'
            ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $rules = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email'=> 'required|email|unique:users',
            "password" => 'required|min:5|max:255'
        ]);

        $rules['password'] = Hash::make($rules['password']);
        
        User::create($rules);

        return redirect('/dashboard')->with('success', 'Login berhasil');
    }
}