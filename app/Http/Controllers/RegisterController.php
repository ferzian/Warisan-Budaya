<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email'=> 'required|email|unique:users',
            "password" => 'required|min:5|max|255'
        ]);

        dd('Registrasi Berhasil !');
    }
}