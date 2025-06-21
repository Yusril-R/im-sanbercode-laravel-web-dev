@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('content')
    <h1>Profile</h1>
    <div class="container">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p>Alamat: {{ $profile->address }}</p>
        <p>Usia : {{ $profile->age }}</p>
        <a href="/profile/{{ $profile->id }}/edit" class="btn btn-warning">Edit</a>
        <a href="/profile/create" class="btn btn-primary">Buat Profile</a>
    </div>
@endsection
