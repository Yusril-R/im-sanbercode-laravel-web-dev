@extends('layouts.master')
@section('title')
    Tambah Buku
@endsection
@section('content')
    <div class="container">
        <h2>Tambah Buku Baru</h2>
        <form action="/book" method="POST" enctype="multipart/form-data">
            @csrf

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label class="form-label">Judul Buku</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Image</label><br>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Summary</label><br>
                <textarea name="summary" id="summary" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                <select name="genre_id" id="genre_id" class="form-control">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/book" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
