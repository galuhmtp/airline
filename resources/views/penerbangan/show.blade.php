<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penerbangan - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #8b5cf6;
            --accent: #ec4899;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            min-height: 100vh;
        }

        /* Navbar Custom */
        .navbar-custom {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            box-shadow: 0 4px 20px rgba(99, 102, 241, 0.3);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            color: white !important;
        }

        .plane-icon {
            display: inline-block;
            animation: fly 3s ease-in-out infinite;
        }

        @keyframes fly {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(-5deg); }
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 8px 16px !important;
            border-radius: 8px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white !important;
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.3);
            color: white !important;
        }

        /* Hero Mini */
        .hero-mini {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            padding: 40px 0;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .hero-mini::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            opacity: 0.3;
        }

        /* Flight Card */
        .flight-detail-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .flight-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 30px;
            position: relative;
        }

        .flight-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
        }

        .route-display {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 40px 0;
        }

        .airport {
            text-align: center;
            flex: 1;
        }

        .airport-name {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .airport-label {
            color: rgba(255, 255, 255, 0.9);
            font-size: 0.9rem;
        }

        .flight-arrow {
            flex: 0 0 auto;
            margin: 0 30px;
        }

        .flight-arrow svg {
            width: 80px;
            height: 40px;
        }

        /* Info Cards */
        .info-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            border-left: 4px solid var(--primary);
        }

        .price-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-left: 4px solid var(--primary);
        }

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        .status-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .facility-badge {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            color: #1f2937;
            padding: 10px 15px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
            color: white;
        }

        .btn-outline-custom {
            border: 2px solid var(--primary);
            color: var(--primary);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 30px 0;
            margin-top: 80px;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Price Highlight */
        .price-highlight {
            color: var(--primary);
            font-weight: 800;
            font-size: 2.5rem;
            margin: 10px 0;
        }

        .price-subtext {
            color: #6b7280;
            font-size: 0.9rem;
        }

        /* Detail List */
        .detail-list {
            list-style: none;
            padding: 0;
        }

        .detail-list li {
            padding: 12px 0;
            border-bottom: 1px solid #f3f4f6;
            display: flex;
            justify-content: between;
        }

        .detail-list li:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #374151;
            min-width: 180px;
        }

        .detail-value {
            color: #6b7280;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .route-display {
                flex-direction: column;
                text-align: center;
                padding: 20px 0;
            }

            .flight-arrow {
                margin: 20px 0;
                transform: rotate(90deg);
            }

            .airport-name {
                font-size: 1.4rem;
            }

            .price-highlight {
                font-size: 2rem;
            }

            .detail-list li {
                flex-direction: column;
                gap: 5px;
            }

            .detail-label {
                min-width: auto;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="plane-icon">✈️</span>
                Wi Wok De Tok Airlines
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">
                            <i class="fas fa-home me-2"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/penerbangan" class="nav-link">
                            <i class="fas fa-plane me-2"></i>Penerbangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pemesanan" class="nav-link">
                            <i class="fas fa-ticket-alt me-2"></i>Pemesanan Saya
                        </a>
                    </li>
                    <li class="nav-item ms-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-logout" style="background: rgba(255, 255, 255, 0.2); border: 2px solid rgba(255, 255, 255, 0.4); color: white; font-weight: 600; padding: 8px 20px; border-radius: 8px; transition: all 0.3s ease;">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Mini -->
    <section class="hero-mini text-center">
        <div class="container">
            <h2>
                <i class="fas fa-info-circle me-3"></i>
                Detail Penerbangan
            </h2>
            <p>
                <i class="fas fa-plane me-2"></i>
                Informasi lengkap tentang penerbangan Anda
            </p>
        </div>
    </section>

    <div class="container mb-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/penerbangan" class="text-decoration-none">Penerbangan</a></li>
                <li class="breadcrumb-item active">{{ $penerbangan->kode_penerbangan }}</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Flight Detail Card -->
                <div class="flight-detail-card fade-in-up">
                    <div class="flight-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <span class="badge-gradient">
                                    <i class="fas fa-plane me-2"></i>{{ $penerbangan->kode_penerbangan }}
                                </span>
                                <h3 class="mt-2 mb-1">Wi Wok De Tok Airlines</h3>
                                <p class="mb-0 opacity-90">Penerbangan Langsung • Kelas Ekonomi</p>
                            </div>
                            <div class="col-auto">
                                <span class="status-badge">
                                    <i class="fas fa-check-circle me-2"></i>Tersedia
                                </span>
                            </div>
                        </div>

                        <!-- Route Display -->
                        <div class="route-display">
                            <div class="airport">
                                <div class="airport-name">{{ $penerbangan->asal }}</div>
                                <div class="airport-label">Bandara Keberangkatan</div>
                            </div>
                            
                            <div class="flight-arrow">
                                <svg viewBox="0 0 80 40" fill="none">
                                    <path d="M5 20H75M75 20L65 15M75 20L65 25" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            
                            <div class="airport">
                                <div class="airport-name">{{ $penerbangan->tujuan }}</div>
                                <div class="airport-label">Bandara Tujuan</div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <div class="row">
                            <!-- Flight Details -->
                            <div class="col-lg-8">
                                <div class="info-card fade-in-up" style="animation-delay: 0.1s;">
                                    <h5 class="fw-bold mb-4">
                                        <i class="fas fa-list-alt me-2 text-primary"></i>
                                        Detail Penerbangan
                                    </h5>
                                    <ul class="detail-list">
                                        <li>
                                            <span class="detail-label">
                                                <i class="fas fa-barcode me-2"></i>Kode Penerbangan:
                                            </span>
                                            <span class="detail-value">{{ $penerbangan->kode_penerbangan }}</span>
                                        </li>
                                        <li>
                                            <span class="detail-label">
                                                <i class="fas fa-plane-departure me-2"></i>Kota Asal:
                                            </span>
                                            <span class="detail-value">{{ $penerbangan->asal }}</span>
                                        </li>
                                        <li>
                                            <span class="detail-label">
                                                <i class="fas fa-plane-arrival me-2"></i>Kota Tujuan:
                                            </span>
                                            <span class="detail-value">{{ $penerbangan->tujuan }}</span>
                                        </li>
                                        <li>
                                            <span class="detail-label">
                                                <i class="fas fa-clock me-2"></i>Waktu Keberangkatan:
                                            </span>
                                            <span class="detail-value">
                                                {{ \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('l, d F Y') }}<br>
                                                <small class="text-primary">
                                                    {{ \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('H:i') }} WIB
                                                </small>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="detail-label">
                                                <i class="fas fa-hourglass-half me-2"></i>Perkiraan Durasi:
                                            </span>
                                            <span class="detail-value">± 2 jam</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Facilities -->
                                <div class="info-card fade-in-up" style="animation-delay: 0.2s;">
                                    <h5 class="fw-bold mb-4">
                                        <i class="fas fa-star me-2 text-warning"></i>
                                        Fasilitas Penerbangan
                                    </h5>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="facility-badge">
                                                <i class="fas fa-suitcase text-primary"></i>
                                                Bagasi 20kg
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facility-badge">
                                                <i class="fas fa-utensils text-success"></i>
                                                Makanan & Minuman
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facility-badge">
                                                <i class="fas fa-tv text-info"></i>
                                                Hiburan Dalam Penerbangan
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facility-badge">
                                                <i class="fas fa-wifi text-warning"></i>
                                                Wi-Fi Gratis
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facility-badge">
                                                <i class="fas fa-plug text-danger"></i>
                                                Colokan Listrik
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="facility-badge">
                                                <i class="fas fa-user-friends text-secondary"></i>
                                                Legroom Ekstra
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Price & Action -->
                            <div class="col-lg-4">
                                <div class="info-card price-card fade-in-up" style="animation-delay: 0.3s;">
                                    <h5 class="fw-bold mb-3">
                                        <i class="fas fa-tag me-2 text-primary"></i>
                                        Harga Tiket
                                    </h5>
                                    <div class="text-center">
                                        <div class="price-highlight">
                                            Rp {{ number_format($penerbangan->harga, 0, ',', '.') }}
                                        </div>
                                        <p class="price-subtext">
                                            <i class="fas fa-check-circle me-1 text-success"></i>
                                            Termasuk pajak & biaya layanan
                                        </p>
                                    </div>

                                    <div class="d-grid gap-2 mt-4">
                                        <a href="{{ route('pemesanan.create', ['penerbangan_id' => $penerbangan->id]) }}" 
                                           class="btn btn-gradient btn-lg">
                                            <i class="fas fa-shopping-cart me-2"></i>
                                            Pesan Tiket Sekarang
                                        </a>
                                        <a href="/penerbangan" class="btn btn-outline-custom">
                                            <i class="fas fa-arrow-left me-2"></i>
                                            Kembali ke Daftar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Information -->
                        <div class="info-card fade-in-up" style="animation-delay: 0.4s;">
                            <h5 class="fw-bold mb-3">
                                <i class="fas fa-info-circle me-2 text-info"></i>
                                Informasi Tambahan
                            </h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-primary rounded-circle p-2 me-3">
                                            <i class="fas fa-door-open text-white"></i>
                                        </div>
                                        <div>
                                            <small class="fw-bold d-block">Check-in</small>
                                            <small class="text-muted">Dibuka 2 jam sebelum keberangkatan</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-success rounded-circle p-2 me-3">
                                            <i class="fas fa-users text-white"></i>
                                        </div>
                                        <div>
                                            <small class="fw-bold d-block">Boarding</small>
                                            <small class="text-muted">Ditutup 30 menit sebelum keberangkatan</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="bg-warning rounded-circle p-2 me-3">
                                            <i class="fas fa-exchange-alt text-white"></i>
                                        </div>
                                        <div>
                                            <small class="fw-bold d-block">Pembatalan</small>
                                            <small class="text-muted">Dapat dibatalkan dengan biaya administrasi</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">
                <i class="fas fa-plane me-2"></i>
                &copy; 2025 Wi Wok De Tok Airlines. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>