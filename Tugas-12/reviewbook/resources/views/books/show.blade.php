@extends('layouts.master')
@section('title')
    Detail Buku
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Judul: {{ $books->title }}</h5>
            <img src="{{ asset('storage/' . $books->image) }}" class="image-fluid" alt="Gambar buku">
            <p class="card-text">Genre: {{ $books->genre->name }}</p>
            <p class="card-text">Deskripsi: {{ $books->summary }}</p>
            <p class="card-text">Stok: {{ $books->stok }}</p>
            <a href="/book" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>

    <div class="mt-3">
        @include('comments.create')
    </div>

    {{-- LIST KOMENTAR --}}
    {{-- <ul class="list-group mt-3">
        @forelse($books->comments as $comment)
            <li class="list-group-item">
                <strong>{{ $comment->user->name }}:</strong> {{ $comment->content }} <br>
                <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
            </li>
        @empty
            <li class="list-group-item">Belum ada komentar.</li>
        @endforelse
    </ul> --}}
@endsection
