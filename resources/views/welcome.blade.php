<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wi Wok De Tok Airlines - Terbang Bersama Kami</title>
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

        /* Hero Section with Carousel */
        .hero-carousel .carousel-item {
            height: 600px;
            position: relative;
        }

        .hero-carousel .carousel-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.7) 0%, rgba(139, 92, 246, 0.7) 100%);
            z-index: 1;
        }

        .hero-carousel img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .carousel-caption {
            z-index: 2;
            bottom: 50%;
            transform: translateY(50%);
        }

        .carousel-caption h1 {
            font-size: 3.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
        }

        .carousel-caption p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        /* Search Box Card */
        .search-box {
            margin-top: -80px;
            position: relative;
            z-index: 10;
        }

        .search-box .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
        }

        .search-box .form-control, .search-box .form-select {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .search-box .form-control:focus, .search-box .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        /* Tabs Custom */
        .nav-tabs-custom .nav-link {
            border: none;
            color: #6b7280;
            font-weight: 600;
            padding: 12px 24px;
            transition: all 0.3s ease;
        }

        .nav-tabs-custom .nav-link:hover {
            color: var(--primary);
        }

        .nav-tabs-custom .nav-link.active {
            color: var(--primary);
            background: transparent;
            border-bottom: 3px solid var(--primary);
        }

        /* Cards with Hover Effect */
        .feature-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .feature-card .card-body {
            padding: 2rem;
        }

        .icon-box {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .icon-box i {
            font-size: 2rem;
            color: white;
        }

        /* Accordion Custom */
        .accordion-custom .accordion-item {
            border: none;
            margin-bottom: 1rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .accordion-custom .accordion-button {
            background: white;
            color: #1f2937;
            font-weight: 600;
            padding: 1.25rem;
        }

        .accordion-custom .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }

        .accordion-custom .accordion-button:focus {
            box-shadow: none;
            border: none;
        }

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
        }

        /* Progress Bars */
        .progress-custom {
            height: 10px;
            border-radius: 10px;
        }

        .progress-custom .progress-bar {
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }

        /* Offcanvas Promo */
        .promo-badge {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            z-index: 1050;
            cursor: pointer;
            background: linear-gradient(135deg, var(--accent) 0%, #f97316 100%);
            color: white;
            padding: 15px 10px;
            border-radius: 10px 0 0 10px;
            box-shadow: -5px 5px 20px rgba(0, 0, 0, 0.2);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: translateY(-50%) scale(1); }
            50% { transform: translateY(-50%) scale(1.05); }
        }

        .promo-badge:hover {
            padding-right: 15px;
        }

        /* List Group Custom */
        .list-group-custom .list-group-item {
            border: none;
            border-left: 4px solid transparent;
            transition: all 0.3s ease;
        }

        .list-group-custom .list-group-item:hover {
            border-left-color: var(--primary);
            background: #f9fafb;
            transform: translateX(5px);
        }

        /* Toast Notification */
        .toast-custom {
            border-radius: 15px;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
            color: white;
        }

        /* Modal Custom */
        .modal-content {
            border-radius: 20px;
            border: none;
        }

        .modal-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 20px 20px 0 0;
        }

        /* Breadcrumb */
        .breadcrumb-custom {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            border-radius: 10px;
            padding: 1rem 1.5rem;
        }

        /* Pagination */
        .pagination-custom .page-link {
            border: none;
            color: var(--primary);
            margin: 0 3px;
            border-radius: 8px;
        }

        .pagination-custom .page-link:hover {
            background: var(--primary);
            color: white;
        }

        .pagination-custom .page-item.active .page-link {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
        }

        /* Spinner Loading */
        .spinner-custom {
            color: var(--primary);
        }

        /* Alert Custom */
        .alert-gradient {
            background: linear-gradient(135deg, #dbeafe 0%, #e0e7ff 100%);
            border: none;
            border-left: 4px solid var(--primary);
            color: #1e40af;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 4rem 0 2rem;
        }

        .footer-custom a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-custom a:hover {
            color: white;
            padding-left: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .carousel-caption h1 {
                font-size: 2rem;
            }
            .carousel-caption p {
                font-size: 1rem;
            }
            .hero-carousel .carousel-item {
                height: 500px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar dengan Dropdown & Search -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span class="plane-icon">✈️</span>
                Wi Wok De Tok Airlines
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-plane me-2"></i>Penerbangan</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-hotel me-2"></i>Hotel</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-gift me-2"></i>Paket Wisata</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promo">Promo</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ route('login') }}" class="btn btn-light btn-sm px-4">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm px-4">
                            <i class="fas fa-user-plus me-2"></i>Daftar
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1600&h=900&fit=crop" alt="Pesawat">
                <div class="carousel-caption">
                    <h1 class="display-3 fw-bold mb-3">Terbang ke Mana Saja</h1>
                    <p class="lead">Jelajahi destinasi impian dengan harga terjangkau</p>
                    <button class="btn btn-light btn-lg px-5" data-bs-toggle="modal" data-bs-target="#bookingModal">
                        <i class="fas fa-search me-2"></i>Cari Penerbangan
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?w=1600&h=900&fit=crop" alt="Destinasi">
                <div class="carousel-caption">
                    <h1 class="display-3 fw-bold mb-3">Promo Spesial Hari Ini</h1>
                    <p class="lead">Diskon hingga 50% untuk penerbangan pilihan</p>
                    <button class="btn btn-light btn-lg px-5" data-bs-toggle="offcanvas" data-bs-target="#promoOffcanvas">
                        <i class="fas fa-tags me-2"></i>Lihat Promo
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=1600&h=900&fit=crop" alt="Travel">
                <div class="carousel-caption">
                    <h1 class="display-3 fw-bold mb-3">Liburan Keluarga</h1>
                    <p class="lead">Paket wisata lengkap dengan hotel dan transportasi</p>
                    <button class="btn btn-light btn-lg px-5">
                        <i class="fas fa-suitcase me-2"></i>Lihat Paket
                    </button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Search Box dengan Tabs -->
    <div class="container search-box">
        <div class="card">
            <div class="card-body p-4">
                <ul class="nav nav-tabs nav-tabs-custom border-0 mb-4" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#oneway">
                            <i class="fas fa-plane-departure me-2"></i>Sekali Jalan
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#roundtrip">
                            <i class="fas fa-exchange-alt me-2"></i>Pulang-Pergi
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#multicity">
                            <i class="fas fa-route me-2"></i>Multi-Kota
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="oneway">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Dari</label>
                                <input type="text" class="form-control" placeholder="Jakarta (CGK)">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label fw-semibold">Ke</label>
                                <input type="text" class="form-control" placeholder="Bali (DPS)">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label fw-semibold">Tanggal</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label fw-semibold">Penumpang</label>
                                <select class="form-select">
                                    <option>1 Orang</option>
                                    <option>2 Orang</option>
                                    <option>3 Orang</option>
                                    <option>4+ Orang</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label d-block">&nbsp;</label>
                                <button class="btn btn-gradient w-100">
                                    <i class="fas fa-search me-2"></i>Cari
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="roundtrip">
                        <div class="alert alert-gradient">
                            <i class="fas fa-info-circle me-2"></i>Hemat hingga 20% untuk tiket pulang-pergi!
                        </div>
                    </div>
                    <div class="tab-pane fade" id="multicity">
                        <div class="alert alert-gradient">
                            <i class="fas fa-map-marked-alt me-2"></i>Rencanakan perjalanan multi-kota Anda dengan mudah!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert Promo -->
    <div class="container mt-5">
        <div class="alert alert-gradient alert-dismissible fade show" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-bolt fs-3 me-3"></i>
                <div>
                    <strong>Flash Sale!</strong> Diskon 30% untuk penerbangan ke Bali hari ini. Buruan pesan!
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>

    <!-- Features dengan Cards & Icons -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-gradient mb-3">Keunggulan Kami</span>
                <h2 class="display-5 fw-bold">Mengapa Memilih Wi Wok De Tok?</h2>
                <p class="text-muted">Pengalaman terbaik untuk perjalanan Anda</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-tag"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Harga Terjangkau</h5>
                            <p class="card-text text-muted">Dapatkan harga terbaik dengan sistem pembayaran yang fleksibel</p>
                            <div class="progress progress-custom mt-3">
                                <div class="progress-bar" style="width: 95%"></div>
                            </div>
                            <small class="text-muted d-block mt-2">95% Kepuasan Pelanggan</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Keamanan Terjamin</h5>
                            <p class="card-text text-muted">Standar keamanan internasional untuk kenyamanan Anda</p>
                            <div class="progress progress-custom mt-3">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <small class="text-muted d-block mt-2">100% Sertifikasi Keamanan</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100">
                        <div class="card-body text-center">
                            <div class="icon-box mx-auto">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Tepat Waktu</h5>
                            <p class="card-text text-muted">Komitmen on-time performance terbaik di kelasnya</p>
                            <div class="progress progress-custom mt-3">
                                <div class="progress-bar" style="width: 92%"></div>
                            </div>
                            <small class="text-muted d-block mt-2">92% On-Time Performance</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Cards dengan Badge -->
    <section class="py-5 bg-light" id="promo">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-gradient mb-3">Penawaran Spesial</span>
                <h2 class="display-5 fw-bold">Promo Bulan Ini</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://cdn.audleytravel.com/2478/1770/79/16027396-pura-ulun-danu-bratan-bali.jpg" class="card-img-top" alt="Bali">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-3">-50%</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0 fw-bold">Bali</h5>
                                <span class="badge bg-success">Flash Sale</span>
                            </div>
                            <p class="text-muted small mb-3">Pulau Dewata menanti Anda</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted small">Rp 1.800.000</span>
                                    <h4 class="text-primary mb-0 fw-bold">Rp 899.000</h4>
                                </div>
                                <button class="btn btn-gradient btn-sm">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://lh7-rt.googleusercontent.com/docsz/AD_4nXdII_mRfl6Afa3W6_i9k_GC4lJl80OgrFKqLak_nJWKssRcoQBGnuzXA9gt6sjqB4wgqs_Cm2IaTxZY9WR1rspCXK-7yvEz79Z8zLcMQqhvcd0Erh4zIiHUefMwizVQQpkEiJBz?key=LDr8w9NzbYIIxlXUBVdxsA" class="card-img-top" alt="Jakarta">
                            <span class="badge bg-warning position-absolute top-0 end-0 m-3">-30%</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0 fw-bold">Jakarta</h5>
                                <span class="badge bg-info">Populer</span>
                            </div>
                            <p class="text-muted small mb-3">Ibukota yang tak pernah tidur</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted small">Rp 999.000</span>
                                    <h4 class="text-primary mb-0 fw-bold">Rp 699.000</h4>
                                </div>
                                <button class="btn btn-gradient btn-sm">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="position-relative">
                            <img src="https://joglosemar.id/wp-content/uploads/2024/05/Tugu-Yogyakarta-2.jpeg" class="card-img-top" alt="Yogyakarta">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-3">-40%</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title mb-0 fw-bold">Yogyakarta</h5>
                                <span class="badge bg-secondary">Trending</span>
                            </div>
                            <p class="text-muted small mb-3">Kota budaya dan sejarah</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="text-decoration-line-through text-muted small">Rp 1.299.000</span>
                                    <h4 class="text-primary mb-0 fw-bold">Rp 779.000</h4>
                                </div>
                                <button class="btn btn-gradient btn-sm">Pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accordion FAQ -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <span class="badge badge-gradient mb-3">FAQ</span>
                    <h2 class="display-6 fw-bold mb-4">Pertanyaan yang Sering Diajukan</h2>
                    <p class="text-muted mb-4">Temukan jawaban untuk pertanyaan umum tentang layanan kami</p>
                    <div class="list-group list-group-custom">
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-headset me-2 text-primary"></i>Customer Service 24/7
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-undo me-2 text-primary"></i>Refund Guarantee
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <i class="fas fa-mobile-alt me-2 text-primary"></i>Mobile Boarding Pass
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion accordion-custom">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Bagaimana cara memesan tiket?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Anda dapat memesan tiket melalui website kami dengan mudah. Cukup pilih kota keberangkatan dan tujuan, pilih tanggal, dan lakukan pembayaran. Anda akan menerima e-ticket melalui email.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Apakah bisa refund tiket?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Ya, kami menyediakan opsi refund sesuai dengan ketentuan yang berlaku. Silakan hubungi customer service kami untuk informasi lebih lanjut.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Bagaimana dengan bagasi?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Setiap penumpang mendapatkan bagasi kabin 7kg dan bagasi check-in 20kg. Bagasi tambahan dapat dibeli dengan harga khusus.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Apakah ada program loyalitas?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Ya! Kami memiliki program Wi Wok Rewards yang memberikan poin setiap pembelian tiket. Poin dapat ditukar dengan diskon atau upgrade kelas.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial dengan Cards -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-gradient mb-3">Testimoni</span>
                <h2 class="display-5 fw-bold">Apa Kata Pelanggan Kami</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=6366f1&color=fff&size=50" class="rounded-circle me-3" alt="User">
                                <div>
                                    <h6 class="mb-0 fw-bold">Budi Santoso</h6>
                                    <small class="text-muted">Jakarta</small>
                                </div>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="text-muted small mb-0">"Pelayanan sangat memuaskan! Proses booking mudah dan harga terjangkau. Pesawat juga selalu tepat waktu. Recommended!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Siti+Nurhaliza&background=8b5cf6&color=fff&size=50" class="rounded-circle me-3" alt="User">
                                <div>
                                    <h6 class="mb-0 fw-bold">Siti Nurhaliza</h6>
                                    <small class="text-muted">Surabaya</small>
                                </div>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="text-muted small mb-0">"Sudah 5 kali terbang dengan Wi Wok De Tok, tidak pernah mengecewakan. Customer service responsif dan helpful banget!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Ahmad+Dahlan&background=ec4899&color=fff&size=50" class="rounded-circle me-3" alt="User">
                                <div>
                                    <h6 class="mb-0 fw-bold">Ahmad Dahlan</h6>
                                    <small class="text-muted">Bandung</small>
                                </div>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="text-muted small mb-0">"Harga kompetitif dengan kualitas yang tidak mengecewakan. Website mudah digunakan. Mantap pokoknya!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter dengan Input Group -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <i class="fas fa-envelope fs-1 text-primary mb-3"></i>
                    <h3 class="fw-bold mb-3">Dapatkan Promo Terbaru</h3>
                    <p class="text-muted mb-4">Subscribe newsletter kami dan dapatkan info promo eksklusif langsung di inbox Anda</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg" placeholder="Masukkan email Anda">
                        <button class="btn btn-gradient" type="button">
                            <i class="fas fa-paper-plane me-2"></i>Subscribe
                        </button>
                    </div>
                    <small class="text-muted">Kami menghargai privasi Anda. Unsubscribe kapan saja.</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h4 class="fw-bold mb-4">
                        <i class="fas fa-plane me-2"></i>Wi Wok De Tok Airlines
                    </h4>
                    <p class="mb-4">Maskapai penerbangan terpercaya yang mengantarkan Anda ke seluruh penjuru Indonesia dengan nyaman dan aman.</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Perusahaan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Tentang Kami</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Karir</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Press Release</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Layanan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Penerbangan</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Hotel</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Paket Wisata</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Asuransi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Bantuan</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>FAQ</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Hubungi Kami</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Syarat & Ketentuan</a></li>
                        <li class="mb-2"><a href="#"><i class="fas fa-angle-right me-2"></i>Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="fw-bold mb-3">Kontak</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-phone me-2"></i>
                            <small>+62 812-3456-7890</small>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-envelope me-2"></i>
                            <small>info@wiwokdetok.com</small>
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <small>Jakarta, Indonesia</small>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 Wi Wok De Tok Airlines. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://via.placeholder.com/50x30/6366f1/ffffff?text=VISA" alt="Visa" class="me-2">
                    <img src="https://via.placeholder.com/50x30/8b5cf6/ffffff?text=MC" alt="Mastercard" class="me-2">
                    <img src="https://via.placeholder.com/50x30/ec4899/ffffff?text=OVO" alt="OVO">
                </div>
            </div>
        </div>
    </footer>

    <!-- Promo Badge (Fixed) -->
    <div class="promo-badge" data-bs-toggle="offcanvas" data-bs-target="#promoOffcanvas">
        <i class="fas fa-gift fs-4 d-block mb-2"></i>
        <small class="fw-bold">PROMO</small>
    </div>

    <!-- Offcanvas Promo -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="promoOffcanvas">
        <div class="offcanvas-header bg-gradient text-white" style="background: linear-gradient(135deg, #ec4899 0%, #f97316 100%);">
            <h5 class="offcanvas-title fw-bold">
                <i class="fas fa-tags me-2"></i>Promo Special
            </h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <div class="alert alert-success">
                <i class="fas fa-fire me-2"></i><strong>Hot Deal!</strong> Promo terbatas hari ini
            </div>
            <div class="list-group list-group-flush">
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0 fw-bold">Jakarta - Bali</h6>
                        <span class="badge bg-danger">-50%</span>
                    </div>
                    <p class="mb-2 small text-muted">Berlaku hingga 31 Okt 2025</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-decoration-line-through small">Rp 1.800.000</span>
                        <h5 class="mb-0 text-danger fw-bold">Rp 899.000</h5>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0 fw-bold">Surabaya - Lombok</h6>
                        <span class="badge bg-warning">-40%</span>
                    </div>
                    <p class="mb-2 small text-muted">Berlaku hingga 30 Okt 2025</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-decoration-line-through small">Rp 1.500.000</span>
                        <h5 class="mb-0 text-warning fw-bold">Rp 900.000</h5>
                    </div>
                </div>
                <div class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0 fw-bold">Medan - Jakarta</h6>
                        <span class="badge bg-info">-35%</span>
                    </div>
                    <p class="mb-2 small text-muted">Berlaku hingga 28 Okt 2025</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="text-decoration-line-through small">Rp 1.200.000</span>
                        <h5 class="mb-0 text-info fw-bold">Rp 780.000</h5>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button class="btn btn-gradient w-100 mb-2">
                    <i class="fas fa-ticket-alt me-2"></i>Lihat Semua Promo
                </button>
                <button class="btn btn-outline-secondary w-100">
                    <i class="fas fa-bell me-2"></i>Aktifkan Notifikasi Promo
                </button>
            </div>
        </div>
    </div>

    <!-- Modal Booking -->
    <div class="modal fade" id="bookingModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">
                        <i class="fas fa-search me-2"></i>Cari Penerbangan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Dari</label>
                            <select class="form-select">
                                <option>Jakarta (CGK)</option>
                                <option>Surabaya (SUB)</option>
                                <option>Medan (KNO)</option>
                                <option>Makassar (UPG)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Ke</label>
                            <select class="form-select">
                                <option>Bali (DPS)</option>
                                <option>Yogyakarta (JOG)</option>
                                <option>Lombok (LOP)</option>
                                <option>Bandung (BDO)</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tanggal Berangkat</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tanggal Pulang</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Dewasa</label>
                            <input type="number" class="form-control" value="1" min="1">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Anak-anak</label>
                            <input type="number" class="form-control" value="0" min="0">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Kelas</label>
                            <div class="btn-group w-100" role="group">
                                <input type="radio" class="btn-check" name="class" id="economy" checked>
                                <label class="btn btn-outline-primary" for="economy">Ekonomi</label>
                                <input type="radio" class="btn-check" name="class" id="business">
                                <label class="btn btn-outline-primary" for="business">Bisnis</label>
                                <input type="radio" class="btn-check" name="class" id="first">
                                <label class="btn btn-outline-primary" for="first">First Class</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-gradient">
                        <i class="fas fa-search me-2"></i>Cari Penerbangan
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11">
        <div id="liveToast" class="toast toast-custom" role="alert">
            <div class="toast-header bg-success text-white">
                <i class="fas fa-check-circle me-2"></i>
                <strong class="me-auto">Berhasil!</strong>
                <small>Baru saja</small>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
                Selamat datang di Wi Wok De Tok Airlines! 🎉
            </div>
        </div>
    </div>

    <!-- Spinner Loading (Hidden by default) -->
    <div class="d-none">
        <div class="spinner-border spinner-custom" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto show toast on page load
        window.addEventListener('load', function() {
            var toast = new bootstrap.Toast(document.getElementById('liveToast'));
            setTimeout(function() {
                toast.show();
            }, 1000);
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>