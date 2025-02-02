<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Aplikasi Uang Kas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2ecc71;
            --text-color: #34495e;
            --bg-color: #ecf0f1;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .main-container {
            margin-left: 270px;
            padding: 2rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            background-color: var(--primary-color);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .about-section {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
        }

        .about-section h4 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .admin-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid var(--primary-color);
            margin-bottom: 1rem;
            transition: transform 0.3s ease;
        }

        .admin-photo:hover {
            transform: scale(1.05);
        }

        .table {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .table th {
            background-color: var(--secondary-color);
            color: white;
            font-weight: normal;
        }

        .icon-feature {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s, transform 0.5s;
        }

        .animate-on-scroll.show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>
    @include('gilang.navbar')

    <main class="py-4 main-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card animate-on-scroll">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>About Aplikasi Uang Kas</span>
                        </div>
                        <div class="card-body">
                            <!-- Section: About the Application -->
                            <div class="about-section animate-on-scroll">
                                <h4 class="text-center mb-4">Tentang Aplikasi</h4>
                                <div class="row">
                                    <div class="col-md-4 text-center mb-4">
                                        <i class="fas fa-money-bill-wave icon-feature"></i>
                                        <h5>Efisien</h5>
                                        <p>Pengelolaan uang kas yang cepat dan akurat</p>
                                    </div>
                                    <div class="col-md-4 text-center mb-4">
                                        <i class="fas fa-chart-line icon-feature"></i>
                                        <h5>Real-time</h5>
                                        <p>Pemantauan informasi keuangan secara langsung</p>
                                    </div>
                                    <div class="col-md-4 text-center mb-4">
                                        <i class="fas fa-lock icon-feature"></i>
                                        <h5>Aman</h5>
                                        <p>Keamanan data terjamin dengan teknologi terkini</p>
                                    </div>
                                </div>
                                <p class="text-muted text-justify">
                                    Aplikasi Uang Kas adalah solusi modern untuk membantu sekolah dalam mengelola
                                    pembayaran uang kas siswa secara efisien. Dengan fitur pencatatan transaksi,
                                    aplikasi ini mempermudah admin dan pengguna dalam memantau informasi keuangan secara
                                    real-time. Dibangun dengan teknologi Laravel 10, aplikasi ini menawarkan kemudahan,
                                    transparansi, dan keandalan.
                                </p>
                            </div>

                            <!-- Section: Admin Details -->
                            <div class="mt-4 animate-on-scroll">
                                <h4 class="text-center mb-4">Data Admin</h4>
                                <div class="text-center">
                                    <img src="{{ asset('foto/download.jpeg') }}" alt="asas" class="admin-photo">
                                </div>
                                <table class="table mt-3">
                                    <tr>
                                        <th>Kelompok</th>
                                        <td>Kelompok 1</td>
                                    </tr>
                                    <tr>
                                        <th>Kelas</th>
                                        <td>Informatika A</td>
                                    </tr>
                                    <tr>
                                        <th>Matkul</th>
                                        <td>Pemrograman Web</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center py-3 mt-4">
        <small>&copy; 2025 Aplikasi Uang Kas. All Rights Reserved.</small>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                    }
                });
            }, { threshold: 0.1 });

            animatedElements.forEach(el => observer.observe(el));
        });
    </script>
</body>

</html>

