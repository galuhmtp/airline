<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan - Wi Wok De Tok Airlines</title>
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
            background-color: #f8f9fa;
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

        .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: white !important;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .navbar-nav .nav-link.fw-bold {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            border-radius: 15px 15px 0 0 !important;
            font-weight: 600;
            padding: 1rem 1.5rem;
        }

        .card-header.bg-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%) !important;
        }

        .card-header.bg-info {
            background: linear-gradient(135deg, #0ea5e9 0%, #3b82f6 100%) !important;
        }

        .card-header.bg-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%) !important;
        }

        .card-header.bg-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 10px 25px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
            color: white;
        }

        .btn-outline-primary {
            border-color: var(--primary);
            color: var(--primary);
        }

        .btn-outline-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        /* Flight Route */
        .flight-route {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            border-radius: 15px;
            padding: 2rem;
            margin: 1.5rem 0;
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
        }

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
        }

        /* Status Badges */
        .status-badge {
            font-size: 0.8em;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
        }

        .badge-confirmed {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
        }

        .badge-pending {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
        }

        .badge-cancelled {
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
        }

        /* Alerts */
        .alert {
            border-radius: 10px;
            border: none;
        }

        .alert-success {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            color: #065f46;
            border-left: 4px solid #10b981;
        }

        /* Breadcrumb */
        .breadcrumb-custom {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            border-radius: 10px;
            padding: 1rem 1.5rem;
        }

        .breadcrumb-item a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .breadcrumb-item.active {
            color: #6b7280;
            font-weight: 600;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        /* Tables */
        .table-borderless td {
            border: none;
            padding: 0.75rem 0.5rem;
        }

        .table-borderless tr:not(:last-child) {
            border-bottom: 1px solid #e5e7eb;
        }

        /* Form Controls */
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

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
                margin-top: 1rem;
            }
            
            .flight-route {
                padding: 1.5rem 1rem;
            }
            
            .flight-route h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/admin/dashboard">
                <i class="fas fa-plane me-2"></i>Wi Wok De Tok Admin
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/admin/dashboard" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="/admin/pesanan" class="nav-link fw-bold active">Data Pesanan</a></li>
                    <li class="nav-item"><a href="/admin/users" class="nav-link">Data User</a></li>
                    <li class="nav-item"><a href="/admin/kota" class="nav-link">Kelola Kota</a></li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link text-light p-0 m-0" style="text-decoration:none;">
                                <i class="fas fa-sign-out-alt me-1"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item"><a href="/admin/dashboard"><i class="fas fa-home me-1"></i>Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/admin/pesanan"><i class="fas fa-clipboard-list me-1"></i>Data Pesanan</a></li>
                <li class="breadcrumb-item active"><i class="fas fa-info-circle me-1"></i>Detail Pesanan</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 text-primary">
                <i class="fas fa-ticket-alt me-2"></i>Detail Pesanan
            </h2>
            <span class="badge badge-gradient">Kode: {{ $pemesanan->kode_booking }}</span>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-8">
                <!-- Informasi Penerbangan -->
                <div class="card detail-card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="fas fa-plane me-2"></i> Informasi Penerbangan</h5>
                    </div>
                    <div class="card-body">
                        <div class="flight-route text-center">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="flight-city">
                                        <h3 class="fw-bold">{{ $pemesanan->penerbangan->asal }}</h3>
                                        <p class="mb-0 opacity-75">Bandara Keberangkatan</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-plane fa-2x opacity-75"></i>
                                    <div class="mt-2">
                                        <small class="opacity-75">Langsung</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="flight-city">
                                        <h3 class="fw-bold">{{ $pemesanan->penerbangan->tujuan }}</h3>
                                        <p class="mb-0 opacity-75">Bandara Tujuan</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fw-semibold text-muted">Kode Penerbangan:</td>
                                        <td class="fw-bold">{{ $pemesanan->penerbangan->kode_penerbangan }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold text-muted">Maskapai:</td>
                                        <td class="fw-bold">Wi Wok De Tok Airlines</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold text-muted">Waktu Keberangkatan:</td>
                                        <td class="fw-bold">{{ \Carbon\Carbon::parse($pemesanan->penerbangan->waktu_keberangkatan)->format('d F Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fw-semibold text-muted">Harga per Tiket:</td>
                                        <td class="fw-bold text-success">Rp {{ number_format($pemesanan->penerbangan->harga, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold text-muted">Kelas:</td>
                                        <td class="fw-bold">Economy</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold text-muted">Durasi:</td>
                                        <td class="fw-bold">± 2 jam</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Penumpang -->
                <div class="card detail-card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><i class="fas fa-user me-2"></i> Informasi Penumpang</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fw-semibold text-muted">Nama Penumpang:</td>
                                        <td class="fw-bold">{{ $pemesanan->nama_penumpang }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold text-muted">No. HP:</td>
                                        <td class="fw-bold">{{ $pemesanan->no_hp }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td class="fw-semibold text-muted">Jumlah Tiket:</td>
                                        <td class="fw-bold">{{ $pemesanan->jumlah_tiket }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-semibold text-muted">Total Harga:</td>
                                        <td class="fw-bold text-primary fs-5">Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Informasi Pesanan -->
                <div class="card detail-card mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0"><i class="fas fa-receipt me-2"></i> Informasi Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-semibold text-muted">Kode Booking:</td>
                                <td><code class="fw-bold text-primary">{{ $pemesanan->kode_booking }}</code></td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-muted">Status:</td>
                                <td>
                                    @if($pemesanan->status == 'confirmed')
                                        <span class="badge badge-confirmed status-badge">
                                            <i class="fas fa-check-circle me-1"></i>CONFIRMED
                                        </span>
                                    @elseif($pemesanan->status == 'pending')
                                        <span class="badge badge-pending status-badge">
                                            <i class="fas fa-clock me-1"></i>PENDING
                                        </span>
                                    @else
                                        <span class="badge badge-cancelled status-badge">
                                            <i class="fas fa-times-circle me-1"></i>CANCELLED
                                        </span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-muted">Tanggal Pesan:</td>
                                <td class="fw-bold">{{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d F Y H:i') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-semibold text-muted">Terakhir Update:</td>
                                <td class="fw-bold">{{ \Carbon\Carbon::parse($pemesanan->updated_at)->format('d F Y H:i') }}</td>
                            </tr>
                        </table>

                        <!-- Update Status -->
                        <form action="{{ route('admin.pesanan.updateStatus', $pemesanan->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Update Status:</label>
                                <select name="status" class="form-select" onchange="this.form.submit()">
                                    <option value="pending" {{ $pemesanan->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="confirmed" {{ $pemesanan->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                    <option value="cancelled" {{ $pemesanan->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Aksi -->
                <div class="card detail-card">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0"><i class="fas fa-cog me-2"></i> Aksi</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route('admin.pesanan') }}" class="btn btn-outline-primary">
                                <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                            </a>
                            <form action="{{ route('admin.pesanan.destroy', $pemesanan->id) }}" method="POST" class="d-grid">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Hapus pesanan ini?')">
                                    <i class="fas fa-trash me-2"></i>Hapus Pesanan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="card detail-card mt-4">
                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-3">Quick Actions</h6>
                        <div class="row g-2">
                            <div class="col-6">
                                <button class="btn btn-outline-primary w-100 btn-sm">
                                    <i class="fas fa-print me-1"></i>Print
                                </button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-outline-success w-100 btn-sm">
                                    <i class="fas fa-envelope me-1"></i>Email
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-custom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; 2025 Wi Wok De Tok Airlines Admin Panel</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Dibuat dengan <i class="fas fa-heart text-danger"></i> untuk perjalanan Anda</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>