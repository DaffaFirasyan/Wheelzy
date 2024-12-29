```html
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
            background-image: url('https://placehold.co/1920x1080');
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
            <a class="navbar-brand" href="#">WHEELZY</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Booking Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Peta Lokasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-light" href="#">Hubungi Kami</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content">
            <span class="badge bg-secondary mb-3">Sewa Kendaraan</span>
            <h1>WHEELZY</h1>
            <p>Nikmati liburan penuh makna di kota Bandung, ciptakan pengalaman tak terlupakan bersama keluarga dengan fasilitas yang kami sediakan.</p>
            <div>
                <a href="#" class="btn btn-green btn-custom me-3">Pesan Tiket Sekarang</a>
                <a href="#" class="btn btn-outline-light btn-custom">Lihat Paket</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+Y5q5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5Y5n5