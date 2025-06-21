@extends('layouts.master')
@section('title')
    Tambah Profile
@endsection
@section('content')
    <form action="/profile" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul></ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="address" id="address" class="form-control" cols="30" rows="10" required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Usia</label>
            <input type="number" name="age" id="age" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/profile" class="btn btn-secondary">Batal</a>
    </form>
@endsection
