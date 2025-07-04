@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <header>
        <h1>SanberBook</h1>
    </header>
    <main>
        <h2>Social Media Developer Santai Berkualitas</h2>
        <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>

        <h3>Benefit Join di SanberBook</h3>
        <ul>
            <li>Mendapatkan motivasi dari sesama developer</li>
            <li>Sharing knowledge dari para mastah Sanber</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>

        <h3>Cara Bergabung di SanberBook</h3>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>Mendaftar di <a href="/register">Form Sign Up</a></li>
            <li>Selesai!</li>
        </ol>
    </main>
@endsection
