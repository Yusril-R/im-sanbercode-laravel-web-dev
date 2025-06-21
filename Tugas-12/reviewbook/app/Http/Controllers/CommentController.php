<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function create()
    {
        return view('comments.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:255',
            'book_id' => 'required|exists:books,id',
        ]);

        Comments::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'book_id' => $request->book_id
        ]);

        return back()->with('success', 'Komentar berhasil ditambahkan.');
    }
}
