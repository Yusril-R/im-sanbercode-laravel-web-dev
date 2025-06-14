@extends('layouts.master')
@section('title')
    {{-- '{{ $genre->name }}' --}}
    Genre
@endsection
@section('content')
    <h2>Tambah Genre Baru</h2>
    <form action="/genre" method="POST">
        @csrf

        {{-- validation --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul></ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Nama Genre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Deskripsi</label><br>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/genre" class="btn btn-secondary">Batal</a>
    </form>
@endsection
