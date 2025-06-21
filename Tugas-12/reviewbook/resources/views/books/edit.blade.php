@extends('layouts.master')
@section('title')
    Edit Buku
@endsection
@section('content')
    <form action="/book/{{ $books->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
            <input type="text" name="title" id="title" class="form-control" value="{{ $books->title }}">
        </div>
        <div class="mb-3">
            <label for="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Summary</label><br>
            <textarea name="summary" id="summary" class="form-control" cols="30" rows="10">{{$books->summary}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" value="{{ $books->stok }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select name="genre_id" id="genre_id" class="form-control">
                @foreach ($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/book" class="btn btn-secondary">Batal</a>
    </form>
@endsection
