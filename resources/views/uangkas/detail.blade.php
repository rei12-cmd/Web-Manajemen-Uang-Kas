<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Transaksi Uang Kas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e3f2fd; /* Light Blue Background */
            color: #0275d8; /* Primary Blue */
            font-family: Arial, sans-serif;
        }
        .card {
            border: 1px solid #90caf9; /* Light Blue Border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card-header {
            background-color: #64b5f6; /* Medium Blue */
            color: white;
            font-weight: bold;
            border-radius: 10px 10px 0 0;
        }
        .btn-secondary {
            background-color: #29b6f6; /* Light Blue */
            color: white;
            border: none;
            border-radius: 5px;
        }
        .btn-secondary:hover {
            background-color: #0288d1; /* Darker Blue */
        }
        label {
            font-weight: bold;
            color: #0275d8;
        }
        .form-control-static {
            background-color: #e3f2fd; /* Match Body Background */
            padding: 10px;
            border: 1px solid #90caf9;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    @include('gilang.navbar')

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Detail Transaksi</span>
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Bayar</label>
                                <p class="form-control-static">{{ $uangkas->tgl_bayar }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Siswa</label>
                                <p class="form-control-static">{{ $uangkas->nama_siswa }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Bayar</label>
                                <p class="form-control-static">Rp {{ number_format($uangkas->jumlah_bayar, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
