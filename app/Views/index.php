<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa USM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        /* Gaya untuk body, navbar, card, dll */
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }
        .navbar {
            background-color: #343a40 !important; /* Biru laut */
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important; /* Putih */
        }
        .navbar-brand:hover, .navbar-nav .nav-link:hover {
            color: #ffc107 !important; /* Oranye */
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 30px;
        }
        .footer-text {
            font-size: 12px;
            color: gray;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Universitas Saintek Muhammadiyah</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Selamat Datang</h5>
                        <p class="card-text">Menyelami Kreativitas Digital di Universitas Saintek Muhammadiyah: Membuka Jalan Menuju Masa Depan dengan Teknologi Informasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <footer class="text-center footer-text">
        <p>Developed by Herdiyan Adam | &copy; 2024</p>
    </footer>
</body>
</html>
