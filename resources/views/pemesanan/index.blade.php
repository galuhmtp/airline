<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Saya - Wi Wok De Tok Airlines</title>
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

        /* Table Container */
        .table-container {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
        }

        /* Table Styling */
        .table thead {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }

        .table thead th {
            border: none;
            padding: 20px 16px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            vertical-align: middle;
        }

        .table thead th:first-child {
            border-radius: 15px 0 0 0;
        }

        .table thead th:last-child {
            border-radius: 0 15px 0 0;
        }

        .table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f3f4f6;
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, #f9fafb 0%, #f3f4f6 100%);
            transform: translateX(5px);
        }

        .table tbody td {
            padding: 20px 16px;
            vertical-align: middle;
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
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
        }

        .status-badge.pending {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
        }

        .status-badge.cancelled {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
            color: white;
        }

        .btn-outline-custom {
            border: 2px solid var(--primary);
            color: var(--primary);
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .btn-outline-custom:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        .btn-tiket {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .btn-tiket:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.3);
            color: white;
        }

        /* Flight Route Badge */
        .route-badge {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 600;
            color: #1f2937;
            font-size: 0.8rem;
            display: inline-block;
        }

        /* Price Highlight */
        .price-highlight {
            color: var(--primary);
            font-weight: 700;
            font-size: 1rem;
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

        /* Booking Row Animation */
        .booking-row {
            animation: fadeInUp 0.5s ease-out;
            animation-fill-mode: both;
        }

        .booking-row:nth-child(1) { animation-delay: 0.1s; }
        .booking-row:nth-child(2) { animation-delay: 0.2s; }
        .booking-row:nth-child(3) { animation-delay: 0.3s; }
        .booking-row:nth-child(4) { animation-delay: 0.4s; }
        .booking-row:nth-child(5) { animation-delay: 0.5s; }

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
                padding: 20px;
                overflow-x: auto;
            }

            .table {
                font-size: 0.85rem;
            }

            .table thead th {
                padding: 15px 12px;
            }

            .table tbody td {
                padding: 15px 12px;
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
                        <a href="/pemesanan" class="nav-link active">
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
                <i class="fas fa-ticket-alt me-3"></i>
                Pemesanan Saya
            </h2>
            <p>
                <i class="fas fa-history me-2"></i>
                Kelola dan lihat riwayat pemesanan tiket Anda
            </p>
        </div>
    </section>

    <!-- Stats Cards -->
    <div class="container stats-container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="stats-card primary fade-in-up">
                    <div class="stats-icon primary">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <h3>{{ $pemesanans->count() }}</h3>
                    <p><i class="fas fa-arrow-up me-1"></i>Total Pemesanan</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card success fade-in-up" style="animation-delay: 0.1s;">
                    <div class="stats-icon success">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>{{ $pemesanans->where('status', 'confirmed')->count() }}</h3>
                    <p><i class="fas fa-arrow-up me-1"></i>Terkonfirmasi</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-card warning fade-in-up" style="animation-delay: 0.2s;">
                    <div class="stats-icon warning">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>{{ $pemesanans->unique('penerbangan_id')->count() }}</h3>
                    <p><i class="fas fa-arrow-up me-1"></i>Rute Berbeda</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="container mb-5">
        <div class="text-center mb-4">
            <span class="badge badge-gradient mb-2">
                <i class="fas fa-list me-2"></i>Daftar Pemesanan
            </span>
            <h4 class="section-title" style="color: #1f2937; font-weight: 800; margin-bottom: 30px; position: relative; display: inline-block;">
                Riwayat Pemesanan Tiket
                <span style="content: ''; position: absolute; bottom: -10px; left: 0; width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%); border-radius: 2px;"></span>
            </h4>
        </div>

        @if($pemesanans->count() > 0)
        <div class="table-container fade-in-up">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>
                                <i class="fas fa-barcode me-2"></i>Kode Booking
                            </th>
                            <th>
                                <i class="fas fa-route me-2"></i>Rute Penerbangan
                            </th>
                            <th>
                                <i class="fas fa-user me-2"></i>Penumpang
                            </th>
                            <th>
                                <i class="fas fa-ticket me-2"></i>Jumlah Tiket
                            </th>
                            <th>
                                <i class="fas fa-money-bill-wave me-2"></i>Total Harga
                            </th>
                            <th>
                                <i class="fas fa-info-circle me-2"></i>Status
                            </th>
                            <th>
                                <i class="fas fa-cog me-2"></i>Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemesanans as $index => $pemesanan)
                        <tr class="booking-row">
                            <td>
                                <span class="fw-bold text-primary">{{ $pemesanan->kode_booking }}</span>
                                <br>
                                <small class="text-muted">
                                    {{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d M Y') }}
                                </small>
                            </td>
                            <td>
                                <div class="route-badge">
                                    <i class="fas fa-plane-departure me-1 text-primary"></i>
                                    {{ $pemesanan->penerbangan->asal }}
                                </div>
                                <div class="my-1">
                                    <i class="fas fa-arrow-right text-muted"></i>
                                </div>
                                <div class="route-badge">
                                    <i class="fas fa-plane-arrival me-1 text-success"></i>
                                    {{ $pemesanan->penerbangan->tujuan }}
                                </div>
                                <small class="text-muted d-block mt-1">
                                    {{ $pemesanan->penerbangan->kode_penerbangan }}
                                </small>
                            </td>
                            <td>
                                <strong>{{ $pemesanan->nama_penumpang }}</strong>
                                <br>
                                <small class="text-muted">{{ $pemesanan->no_hp }}</small>
                            </td>
                            <td>
                                <span class="fw-bold">{{ $pemesanan->jumlah_tiket }}</span>
                                <small class="text-muted d-block">tiket</small>
                            </td>
                            <td>
                                <span class="price-highlight">Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</span>
                            </td>
                            <td>
                                @php
                                    $statusClass = 'status-badge ' . $pemesanan->status;
                                @endphp
                                <span class="{{ $statusClass }}">
                                    <i class="fas fa-{{ $pemesanan->status == 'confirmed' ? 'check-circle' : ($pemesanan->status == 'pending' ? 'clock' : 'times-circle') }} me-1"></i>
                                    {{ ucfirst($pemesanan->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('pemesanan.tiket', $pemesanan->id) }}" class="btn btn-tiket">
                                        <i class="fas fa-eye me-1"></i>Lihat Tiket
                                    </a>
                                    @if($pemesanan->status == 'confirmed')
                                    <a href="{{ route('pemesanan.cetak', $pemesanan->id) }}" class="btn btn-outline-custom btn-sm" target="_blank">
                                        <i class="fas fa-print me-1"></i>Cetak
                                    </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <!-- Empty State -->
        <div class="table-container fade-in-up">
            <div class="empty-state">
                <i class="fas fa-ticket-alt"></i>
                <h5>Belum Ada Pemesanan</h5>
                <p class="mb-4">Anda belum memiliki tiket pesawat. Yuk pesan tiket pertama Anda!</p>
                <a href="/penerbangan" class="btn btn-gradient">
                    <i class="fas fa-plane me-2"></i>Pesan Tiket Sekarang
                </a>
            </div>
        </div>
        @endif
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
    <script>
        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to table rows
            const tableRows = document.querySelectorAll('.table tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(8px)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });

            // Add click effect to buttons
            const buttons = document.querySelectorAll('.btn-tiket, .btn-outline-custom');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add status badge animations
            const statusBadges = document.querySelectorAll('.status-badge');
            statusBadges.forEach(badge => {
                badge.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.05)';
                    this.style.transition = 'transform 0.2s ease';
                });
                
                badge.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        });

        // Add ripple effect styles
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.6);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
            }
            
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
            
            .btn-tiket, .btn-outline-custom {
                position: relative;
                overflow: hidden;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>