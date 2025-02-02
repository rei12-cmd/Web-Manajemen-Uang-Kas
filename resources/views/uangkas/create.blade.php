<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi - Aplikasi Uang Kas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .main-container {
            margin-left: 270px;
            padding: 2rem;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
        }
        .btn-primary {
            background-color: #0056b3;
            border: none;
        }
        .btn-primary:hover {
            background-color: #003d82;
        }
        .btn-secondary {
            background-color: #ffc107;
            border: none;
            color: #000;
        }
        .btn-secondary:hover {
            background-color: #e0a800;
            color: #000;
        }
        .form-control:focus, .input-group-text:focus {
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .input-group-text {
            background-color: #e9ecef;
            color: #495057;
        }
    </style>
</head>
<body>
@include('gilang.navbar')

<main class="main-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center py-3">
                        <h5 class="mb-0"><i class="fas fa-plus-circle me-2"></i>Tambah Transaksi</h5>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('uangkas.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="tgl_bayar" class="form-label">
                                    <i class="fas fa-calendar-alt me-2"></i>Tanggal Bayar
                                </label>
                                <input type="date" class="form-control" id="tgl_bayar" name="tgl_bayar" required>
                            </div>

                            <div class="mb-3">
                                <label for="nama_siswa" class="form-label">
                                    <i class="fas fa-user me-2"></i>Nama Siswa
                                </label>
                                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_bayar" class="form-label">
                                    <i class="fas fa-money-bill-wave me-2"></i>Jumlah Bayar
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">Rp</span>
                                    <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar" required>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-2"></i>Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

