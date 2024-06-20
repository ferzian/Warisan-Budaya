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
            'Nama' => 'required|max:255',
            'Username' => 'required|min:5|max:255|unique:users',
            'Email'=> 'required|email|unique:users',
            "Password" => 'required|min:5|max|255'
        ]);

        dd('Registrasi Berhasil !');
    }
}