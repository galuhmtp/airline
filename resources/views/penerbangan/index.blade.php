<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerbangan - Wi Wok De Tok Airlines</title>
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

        /* Hero Section */
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

        .hero-mini h2 {
            font-size: 2.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            position: relative;
            margin: 0;
        }

        .hero-mini p {
            position: relative;
            margin: 10px 0 0 0;
            font-size: 1.1rem;
            opacity: 0.95;
        }

        /* Stats Cards */
        .stats-container {
            margin-top: -30px;
            margin-bottom: 40px;
            position: relative;
            z-index: 10;
        }

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            height: 100%;
        }

        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .stats-card.primary {
            border-left-color: var(--primary);
        }

        .stats-card.success {
            border-left-color: #10b981;
        }

        .stats-card.warning {
            border-left-color: #f59e0b;
        }

        .stats-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .stats-icon.primary {
            background: linear-gradient(135deg, #dbeafe 0%, #e0e7ff 100%);
            color: var(--primary);
        }

        .stats-icon.success {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            color: #10b981;
        }

        .stats-icon.warning {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            color: #f59e0b;
        }

        .stats-card h3 {
            font-size: 2rem;
            font-weight: 800;
            margin: 0;
            color: #1f2937;
        }

        .stats-card p {
            margin: 5px 0 0 0;
            color: #6b7280;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Filter Section */
        .filter-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .filter-card h5 {
            color: #1f2937;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .form-control, .form-select {
            border-radius: 10px;
            padding: 10px 15px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        /* Badge */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Section Title */
        .section-title {
            color: #1f2937;
            font-weight: 800;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 2px;
        }

        /* Table Container */
        .table-container {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        /* Table Styling */
        .table thead {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }

        .table thead th {
            border: none;
            padding: 16px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            vertical-align: middle;
        }

        .table thead th:first-child {
            border-radius: 10px 0 0 0;
        }

        .table thead th:last-child {
            border-radius: 0 10px 0 0;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            transform: scale(1.01);
        }

        .table tbody td {
            padding: 18px 16px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
        }

        /* Code Badge */
        .code-badge {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            padding: 8px 14px;
            border-radius: 8px;
            font-weight: 700;
            color: #1f2937;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            display: inline-block;
        }

        /* Location Badge */
        .location-badge {
            background: linear-gradient(135deg, #dbeafe 0%, #e0e7ff 100%);
            color: var(--primary);
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.85rem;
            display: inline-block;
        }

        /* Price Highlight */
        .price-highlight {
            color: var(--primary);
            font-weight: 800;
            font-size: 1.2rem;
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
            color: white;
        }

        .btn-detail {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-detail:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            color: white;
        }

        .btn-logout {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.4);
            color: white;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
            color: white;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 30px 0;
            margin-top: 80px;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            color: #6b7280;
        }

        .empty-state i {
            font-size: 5rem;
            margin-bottom: 25px;
            opacity: 0.2;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .empty-state h5 {
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 10px;
        }

        /* Time Badge */
        .time-badge {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            color: #92400e;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-mini h2 {
                font-size: 1.8rem;
            }
            
            .hero-mini p {
                font-size: 0.95rem;
            }

            .stats-card {
                margin-bottom: 20px;
            }

            .table-container {
                padding: 15px;
                overflow-x: auto;
            }

            .table {
                font-size: 0.85rem;
            }
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

        /* Flight Row Animation */
        .flight-row {
            animation: fadeInUp 0.5s ease-out;
            animation-fill-mode: both;
        }

        .flight-row:nth-child(1) { animation-delay: 0.1s; }
        .flight-row:nth-child(2) { animation-delay: 0.2s; }
        .flight-row:nth-child(3) { animation-delay: 0.3s; }
        .flight-row:nth-child(4) { animation-delay: 0.4s; }
        .flight-row:nth-child(5) { animation-delay: 0.5s; }
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
                        <a href="/penerbangan" class="nav-link active">
                            <i class="fas fa-plane me-2"></i>Penerbangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pemesanan" class="nav-link">
                            <i class="fas fa-ticket-alt me-2"></i>Pemesanan Saya
                        </a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="/logout" class="btn btn-logout">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Mini -->
    <section class="hero-mini text-center">
        <div class="container">
            <h2>
                <i class="fas fa-plane-departure me-3"></i>
                Daftar Penerbangan
            </h2>
            <p>
                <i class="fas fa-globe me-2"></i>
                Temukan penerbangan terbaik untuk perjalanan Anda
            </p>
        </div>
    </section>

    <!-- Stats Cards -->
    <div class="container stats-container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="stats-card primary fade-in-up">
                    <div class="stats-icon primary">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>156</h3>
                    <p><i class="fas fa-arrow-up me-1"></i>Total Penerbangan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card success fade-in-up" style="animation-delay: 0.1s;">
                    <div class="stats-icon success">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3>24</h3>
                    <p><i class="fas fa-arrow-up me-1"></i>Destinasi Tersedia</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card warning fade-in-up" style="animation-delay: 0.2s;">
                    <div class="stats-icon warning">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>92%</h3>
                    <p><i class="fas fa-arrow-up me-1"></i>On-Time Performance</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="container">
        <div class="filter-card fade-in-up">
            <h5>
                <i class="fas fa-filter me-2 text-primary"></i>
                Filter Penerbangan
            </h5>
            <div class="row g-3">
                <div class="col-md-3">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-map-marker-alt me-2 text-primary"></i>Kota Asal
                    </label>
                    <select class="form-select">
                        <option value="">Semua Kota</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Bali</option>
                        <option>Medan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-map-marker-alt me-2 text-success"></i>Kota Tujuan
                    </label>
                    <select class="form-select">
                        <option value="">Semua Kota</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Bali</option>
                        <option>Medan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-semibold">
                        <i class="fas fa-calendar me-2 text-warning"></i>Tanggal
                    </label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label d-block">&nbsp;</label>
                    <button class="btn btn-gradient w-100">
                        <i class="fas fa-search me-2"></i>Cari
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="container mb-5">
        <div class="text-center mb-4">
            <span class="badge badge-gradient mb-2">
                <i class="fas fa-list me-2"></i>Penerbangan Tersedia
            </span>
            <h4 class="section-title">Semua Jadwal Penerbangan</h4>
        </div>

        <div class="table-container fade-in-up">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>
                                <i class="fas fa-barcode me-2"></i>Kode Penerbangan
                            </th>
                            <th>
                                <i class="fas fa-plane-departure me-2"></i>Asal
                            </th>
                            <th>
                                <i class="fas fa-plane-arrival me-2"></i>Tujuan
                            </th>
                            <th>
                                <i class="fas fa-clock me-2"></i>Waktu Keberangkatan
                            </th>
                            <th>
                                <i class="fas fa-money-bill-wave me-2"></i>Harga
                            </th>
                            <th>
                                <i class="fas fa-cog me-2"></i>Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="flight-row">
                            <td>
                                <span class="code-badge">WWDT-101</span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Jakarta
                                </span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Surabaya
                                </span>
                            </td>
                            <td>
                                <span class="time-badge">
                                    <i class="far fa-calendar me-1"></i>25 Okt 2025, 08:00
                                </span>
                            </td>
                            <td>
                                <span class="price-highlight">Rp 850.000</span>
                            </td>
                            <td>
                                <a href="/penerbangan/1" class="btn btn-detail btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr class="flight-row">
                            <td>
                                <span class="code-badge">WWDT-102</span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Jakarta
                                </span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Bali
                                </span>
                            </td>
                            <td>
                                <span class="time-badge">
                                    <i class="far fa-calendar me-1"></i>25 Okt 2025, 10:30
                                </span>
                            </td>
                            <td>
                                <span class="price-highlight">Rp 1.200.000</span>
                            </td>
                            <td>
                                <a href="/penerbangan/2" class="btn btn-detail btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr class="flight-row">
                            <td>
                                <span class="code-badge">WWDT-103</span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Surabaya
                                </span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Medan
                                </span>
                            </td>
                            <td>
                                <span class="time-badge">
                                    <i class="far fa-calendar me-1"></i>26 Okt 2025, 14:00
                                </span>
                            </td>
                            <td>
                                <span class="price-highlight">Rp 1.500.000</span>
                            </td>
                            <td>
                                <a href="/penerbangan/3" class="btn btn-detail btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr class="flight-row">
                            <td>
                                <span class="code-badge">WWDT-104</span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Bali
                                </span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Yogyakarta
                                </span>
                            </td>
                            <td>
                                <span class="time-badge">
                                    <i class="far fa-calendar me-1"></i>27 Okt 2025, 09:15
                                </span>
                            </td>
                            <td>
                                <span class="price-highlight">Rp 950.000</span>
                            </td>
                            <td>
                                <a href="/penerbangan/4" class="btn btn-detail btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        <tr class="flight-row">
                            <td>
                                <span class="code-badge">WWDT-105</span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Medan
                                </span>
                            </td>
                            <td>
                                <span class="location-badge">
                                    <i class="fas fa-map-marker-alt me-1"></i>Jakarta
                                </span>
                            </td>
                            <td>
                                <span class="time-badge">
                                    <i class="far fa-calendar me-1"></i>28 Okt 2025, 16:45
                                </span>
                            </td>
                            <td>
                                <span class="price-highlight">Rp 1.100.000</span>
                            </td>
                            <td>
                                <a href="/penerbangan/5" class="btn btn-detail btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" style="border-radius: 10px 0 0 10px;">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#" style="background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%); border: none;">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="color: var(--primary);">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="color: var(--primary);">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" style="border-radius: 0 10px 10px 0;">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
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

    
</html>