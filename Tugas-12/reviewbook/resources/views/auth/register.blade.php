@extends('layouts.master')
@section('title')
    REGISTER
@endsection
@section('content')
    <div class="container">
        <form action="/register" method="POST">
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
                <label class="form-label">Username</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"  required>
            </div>
            <div class="mb-3">
                <label class="form-label">Sudah punya akun? Klik disini untuk</label>
                <a href="/login"> login</a>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

