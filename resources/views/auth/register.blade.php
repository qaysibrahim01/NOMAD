@extends('master.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <style>
       
        .form-group input {
            width: 100%; 
            padding: 10px; 
            margin: 5px 0; 
            border: 1px solid #ccc; 
            border-radius: 4px; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Register</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form  method="POST" action="{{route("register.post")}}">
                @csrf
                <div class="form-group">
                    <label for="name">Fullname</label>
                    <input type="name" id="name" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Register</button>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>



@endsection


