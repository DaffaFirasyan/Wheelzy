<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WHEELZY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .bg {
            background-image: url('/images/CarLandingPage.png');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            color: white;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }
        .navbar {
            padding: 1rem 2rem;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .navbar-nav .nav-link {
            color: white !important;
            margin-right: 1rem;
        }
        .navbar-nav .nav-link:last-child {
            margin-right: 0;
        }
        .btn-outline-light {
            border-color: white;
            color: white;
        }
        .btn-outline-light:hover {
            background-color: white;
            color: black;
        }
        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .content h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .content p {
            font-size: 1.25rem;
            margin: 1rem 0;
        }
        .btn-custom {
            padding: 0.75rem 2rem;
            font-size: 1rem;
            border-radius: 50px;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
        }
        .btn-green:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="overlay"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="/">WHEELZY</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                    </li>
            </div>
        </nav>
        <div class="content">
            <h1>WHEELZY</h1>
            <p>
            Liburan di Bandung jadi lebih seru dengan Wheelzy! Sewa kendaraan nyaman, fleksibel, dan siap bawa Anda ke momen tak terlupakan bersama orang terdekat.</p>
            <div>
            </div>
        </div>
    </div>