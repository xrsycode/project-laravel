<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB - Pendaftaran</title>
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
                <a class="nav-link" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('pendaftaran.create') }}">Pendaftaran</a>
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
    <h2 class="text-center mb-4">FORMILIR PENDAFTARAN</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <form action="{{ route('pendaftaran.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                        <div class="mb-3">
                            <label for="no_whatsapp" class="form-label">No WhatsApp</label>
                            <input type="text" class="form-control" id="no_whatsapp" name="no_whatsapp">
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>
                        <div class="mb-3">
                            <label for="jalur_pendaftaran" class="form-label">Jalur Pendaftaran</label>
                            <select class="form-select" id="jalur_pendaftaran" name="jalur_pendaftaran">
                                <option selected>Pilih Jalur</option>
                                <option value="jalur_prestasi">Jalur Prestasi</option>
                                <option value="jalur_reguler">Jalur Reguler</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="biaya_pendaftaran" class="form-label">Biaya Pendaftaran</label>
                            <input type="number" class="form-control" id="biaya_pendaftaran" name="biaya_pendaftaran">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
