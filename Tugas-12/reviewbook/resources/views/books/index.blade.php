@extends('layouts.master')
@section('title')
    Buku
@endsection
@section('content')
    <style>
        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-body {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card-title {
            font-weight: bold;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .card-text {
            flex-grow: 1;
        }

        .card .btn {
            margin-right: 5px;
        }

        .row>.col-md-4 {
            display: flex;
            margin-bottom: 20px;
        }

        .col-md-4 .card {
            width: 100%;
        }
    </style>
    <div class="container">
        <h2 >LIST BUKU</h2>
        <a href="/book/create" class="btn btn-primary mb-3">Tambah Buku</a>
        <div class="row">
            @foreach ($books as $book)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title fs-3">{{ $book->title }}</h5>
                                <form action="/book/{{ $book->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                            <img src="{{ asset('storage/' . $book->image) }}" class="image-fluid mt-2" alt="Gambar buku">
                            <p class="card-text">{{ $book->summary }}</p>
                            <p class="card-text">Tersisa : {{ $book->stok }}</p>
                            <p class="card-text">Genre : {{ $book->genre->name }}</p>
                            <div class="d-flex">
                                <a href="/book/{{ $book->id }}" class="btn btn-primary"><i class="fa-solid fa-circle-info"></i></a>
                                <a href="/book/{{ $book->id }}/edit" class="btn btn-success"><i
                                        class="fa-solid fa-file-pen"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
