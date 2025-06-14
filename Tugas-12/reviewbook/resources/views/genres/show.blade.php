@extends('layouts.master')
@section('title')
    Detail Genre
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $genres->name }}</h5>
            <p class="card-text">Deskripsi: {{ $genres->description }}</p>
            <a href="/genre" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
@endsection
