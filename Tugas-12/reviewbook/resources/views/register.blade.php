@extends('layouts.master')
@section('title')
    Register
@endsection
@section('content')
    <header>
        <h1>Buat Account Baru!</h1>
        <h2>Sign Up Form</h2>
    </header>
    <main>
        <form action="/welcome" method="POST">
            @csrf
            <label for="first_name">First Name:</label> <br> <br>
            <input type="text" id="first_name" name="first_name" required>
            <br><br>
            <label for="last_name">Last Name:</label> <br><br>
            <input type="text" id="last_name" name="last_name" required>
            <br><br>
            <label for="gender">Gender</label><br><br>
            <input type="radio" id="male_gender" name="male_gender"> Male <br>
            <input type="radio" id="female_gender" name="female_gender"> Female <br>
            <input type="radio" id="other_gender" name="other_gender"> Other <br>
            <br>
            <label for="nationality">Nationality:</label><br><br>
            <select name="nationality" id="nationality">
                <option value="indonesia">Indonesia</option>
                <option value="singapore">Singapore</option>
                <option value="malaysia">Malaysia</option>
                <option value="thailand">Thailand</option>
            </select>
            <br><br>
            <label for="languange">Languange Spoken:</label><br><br>
            <input type="checkbox" id="indonesian" name="indonesian"> Bahasa Indonesia <br>
            <input type="checkbox" id="english" name="english"> English <br>
            <input type="checkbox" id="other" name="other"> Other <br>
            <br>
            <label for="bio">Bio:</label><br><br>
            <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
            <br><br>
            <button type="submit">Sign Up</button>
        </form>
    </main>
@endsection
