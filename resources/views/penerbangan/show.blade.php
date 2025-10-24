<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penerbangan - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }

        .flight-card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .flight-header {
            background: linear-gradient(to right, #0d6efd, #1e90ff);
            color: white;
            border-radius: 10px 10px 0 0;
            padding: 20px;
        }

        .price-section {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 15px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">Wi Wok De Tok</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="/penerbangan" class="nav-link">Penerbangan</a></li>
                    <li class="nav-item"><a href="/pemesanan" class="nav-link">Pemesanan Saya</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Breadcrumb -->
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="/penerbangan">Penerbangan</a></li>
                        <li class="breadcrumb-item active">Detail Penerbangan</li>
                    </ol>
                </nav>

                <!-- Flight Card -->
                <div class="card flight-card">
                    <div class="flight-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="mb-0">{{ $penerbangan->kode_penerbangan }}</h4>
                                <p class="mb-0">Wi Wok De Tok Airlines</p>
                            </div>
                            <div class="col-auto">
                                <span class="badge bg-success fs-6">Tersedia</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <!-- Route Information -->
                        <div class="row text-center mb-4">
                            <div class="col">
                                <h5 class="fw-bold">{{ $penerbangan->asal }}</h5>
                                <p class="text-muted mb-0">Bandara Keberangkatan</p>
                            </div>
                            <div class="col-auto">
                                <div class="flight-arrow">
                                    <svg width="50" height="20" viewBox="0 0 50 20" fill="none">
                                        <path d="M5 10H45M45 10L35 5M45 10L35 15" stroke="#0d6efd" stroke-width="2" />
                                    </svg>
                                </div>
                            </div>
                            <div class="col">
                                <h5 class="fw-bold">{{ $penerbangan->tujuan }}</h5>
                                <p class="text-muted mb-0">Bandara Tujuan</p>
                            </div>
                        </div>

                        <!-- Flight Details -->
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h6 class="fw-bold">Detail Penerbangan</h6>
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Kode Penerbangan:</strong></td>
                                        <td>{{ $penerbangan->kode_penerbangan }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Asal:</strong></td>
                                        <td>{{ $penerbangan->asal }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tujuan:</strong></td>
                                        <td>{{ $penerbangan->tujuan }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Waktu Keberangkatan:</strong></td>
                                        <td>{{ \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('d F Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Durasi:</strong></td>
                                        <td>± 2 jam</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <div class="price-section">
                                    <h6 class="fw-bold">Harga Tiket</h6>
                                    <h3 class="text-primary">Rp {{ number_format($penerbangan->harga, 0, ',', '.') }}</h3>
                                    <p class="text-muted">Harga sudah termasuk pajak dan biaya layanan</p>
                                </div>
                            </div>
                        </div>

                        <!-- Facilities -->
                        <div class="mb-4">
                            <h6 class="fw-bold">Fasilitas</h6>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge bg-light text-dark me-2">✓</span>
                                        <small>Bagasi 20kg</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge bg-light text-dark me-2">✓</span>
                                        <small>Makanan</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge bg-light text-dark me-2">✓</span>
                                        <small>Hiburan</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="/penerbangan" class="btn btn-secondary me-md-2">
                                Kembali
                            </a>
                            <a href="{{ route('pemesanan.create', ['penerbangan_id' => $penerbangan->id]) }}" class="btn btn-primary">
                                Pesan Tiket Sekarang
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="card mt-4">
                    <div class="card-body">
                        <h6 class="fw-bold">Informasi Tambahan</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <small class="text-muted">
                                    <strong>Check-in:</strong> Dibuka 2 jam sebelum keberangkatan
                                </small>
                            </li>
                            <li class="mb-2">
                                <small class="text-muted">
                                    <strong>Boarding:</strong> Ditutup 30 menit sebelum keberangkatan
                                </small>
                            </li>
                            <li>
                                <small class="text-muted">
                                    <strong>Kebijakan Pembatalan:</strong> Dapat dibatalkan dengan biaya administrasi
                                </small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center py-3 mt-5">
        &copy; 2025 Wi Wok De Tok Airlines
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
</body>

</html>