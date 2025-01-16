@extends('master.layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <style>
        .register-link p {
            color: white; /* Make the text white */
        }
        .register-link a {
            color: white; /* Make the link text white */
            text-decoration: underline; /* Optional: add underline to the link */
        }
    </style>
</head>
<body>
    <!-- Back Arrow Button at Top Left -->
    <a href="{{ url()->previous() }}" class="back-button">
        <i class="ri-arrow-left-line"></i>
    </a>

    <div class="login-container">
        <div class="login-box">
            <h2>Login</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn">Login</button>
                </div>
            </form>
            
            <!-- Register Here Link -->
            <div class="register-link">
                <p>Don't have an account? <a href="{{ route('register') }}">register here</a></p>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
