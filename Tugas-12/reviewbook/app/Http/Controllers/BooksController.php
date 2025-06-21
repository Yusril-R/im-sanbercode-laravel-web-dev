<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Books;
use App\Models\Comments;
use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;


class BooksController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(['auth', AdminMiddleware::class], except: ['index', 'show']),
        ];
    }
    public function index()
    {
        $books = Books::with('genre')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $genres = Genre::all();
        return view('books.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'summary' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stok' => 'required|integer',
            'genre_id' => 'required|exists:genres,id'
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Books::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'image' => $imagePath,
            'stok' => $request->stok,
            'genre_id' => $request->genre_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/book');
    }

    public function show($id)
    {
        $books = Books::find($id);
        return view('books.show', compact('books'));
    }

    public function edit($id)
    {
        $books = Books::find($id);
        $genres = Genre::all();
        return view('books.edit', compact('books', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $books = Books::find($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $books->image;
        }

        $books->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'image' => $imagePath,
            'stok' => $request->stok,
            'genre_id' => $request->genre_id,
            'updated_at' => Carbon::now()
        ]);

        return redirect('/book');
    }

    public function destroy($id)
    {
        $books = Books::find($id);
        $books->delete();
        return redirect('/book');
    }
}
