@extends('layouts.master')
@section('title')
    Edit Genre
@endsection
@section('content')
    <form action="/genre/{{ $genres->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Genre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $genres->name }}" required>
            @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label><br>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$genres->description}}</textarea>
            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="/genre" class="btn btn-secondary">Batal</a>
    </form>
@endsection
