@extends('layouts.master')
@section('title')
    Edit Profile
@endsection
@section('content')
    <form action="/profile/{{ $profile->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="address" id="address" class="form-control" cols="30" rows="10" required>{{ $profile->address }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Usia</label>
            <input type="number" name="age" id="age" class="form-control" value="{{ $profile->age }}" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/profile" class="btn btn-secondary">Batal</a>
    </form>
@endsection
