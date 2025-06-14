@extends('layouts.master')
@section('title')
    {{-- '{{ $genre->name }}' --}}
    Genre
@endsection
@section('content')
    <div class="container">
        <h2>List Genre</h2>
        <a href="/genre/create" class="btn btn-primary mb-3">Tambah Genre</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $genre->name }}</td>
                        <td>{{ $genre->description }}</td>
                        <td>
                            <form action="/genre/{{ $genre->id }}" method="POST">
                                <a href="/genre/{{ $genre->id }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="/genre/{{ $genre->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
