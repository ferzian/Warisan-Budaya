<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'namaUser' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'komentar' => 'required|string',
        ]);

        Feedback::create([
            'namaUser' => $request->namaUser,
            'email' => $request->email,
            'komentar' => $request->komentar,
        ]);

        return redirect()->back();
    }

    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback.index', compact('feedbacks'));
    }
}