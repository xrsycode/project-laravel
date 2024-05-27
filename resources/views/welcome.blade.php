<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - Beranda</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pendaftaran.create') }}">Pendaftaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pembayaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Bantuan</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
<div class="container mt-5">
    <h2 class="text-center mb-4">Alur Pendaftaran</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">Pilih Jalur Pendaftaran</li>
                        <li class="list-group-item">Isi Data Diri</li>
                        <li class="list-group-item">Bayar Biaya Pendaftaran</li>
                        <li class="list-group-item">Selesai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
