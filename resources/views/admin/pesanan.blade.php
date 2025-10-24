<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan - Wi Wok De Tok Airlines</title>
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

        /* Tables */
        .table th {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            font-weight: 600;
            border: none;
            padding: 1rem;
        }

        .table td {
            padding: 1rem;
            vertical-align: middle;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(99, 102, 241, 0.05);
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

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
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

        .alert-danger {
            background: linear-gradient(135deg, #fecaca 0%, #fca5a5 100%);
            color: #7f1d1d;
            border-left: 4px solid #ef4444;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        /* Stats Cards */
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .stat-card.primary {
            border-top: 4px solid var(--primary);
        }

        .stat-card.warning {
            border-top: 4px solid #f59e0b;
        }

        .stat-card.danger {
            border-top: 4px solid #ef4444;
        }

        .stat-card.success {
            border-top: 4px solid #10b981;
        }

        .stat-card h4 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-card.primary h4 {
            color: var(--primary);
        }

        .stat-card.warning h4 {
            color: #f59e0b;
        }

        .stat-card.danger h4 {
            color: #ef4444;
        }

        .stat-card.success h4 {
            color: #10b981;
        }

        /* Status Badges */
        .status-badge {
            font-size: 0.8em;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
                margin-top: 1rem;
            }
            
            .table-responsive {
                font-size: 0.9rem;
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 text-primary">
                <i class="fas fa-clipboard-list me-2"></i>Data Pesanan Pengguna
            </h2>
            <span class="badge badge-gradient">Total: {{ $pemesanans->count() }} Pesanan</span>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body table-responsive">
                @if($pemesanans->count() > 0)
                <table class="table table-striped align-middle">
                    <thead>
                        <tr>
                            <th>Kode Booking</th>
                            <th>Nama Penumpang</th>
                            <th>No. HP</th>
                            <th>Penerbangan</th>
                            <th>Rute</th>
                            <th>Jumlah Tiket</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Tanggal Pesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemesanans as $pemesanan)
                        <tr>
                            <td>
                                <strong class="text-primary">{{ $pemesanan->kode_booking }}</strong>
                            </td>
                            <td>{{ $pemesanan->nama_penumpang }}</td>
                            <td>{{ $pemesanan->no_hp }}</td>
                            <td>
                                <small class="text-muted">Kode:</small><br>
                                <strong>{{ $pemesanan->penerbangan->kode_penerbangan }}</strong>
                            </td>
                            <td>
                                <small>{{ $pemesanan->penerbangan->asal }}</small><br>
                                <i class="fas fa-arrow-right text-primary"></i><br>
                                <small>{{ $pemesanan->penerbangan->tujuan }}</small>
                            </td>
                            <td class="text-center fw-bold">{{ $pemesanan->jumlah_tiket }}</td>
                            <td class="fw-bold text-success">Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</td>
                            <td>
                                @if($pemesanan->status == 'confirmed')
                                    <span class="badge bg-success status-badge">
                                        <i class="fas fa-check-circle me-1"></i>CONFIRMED
                                    </span>
                                @elseif($pemesanan->status == 'pending')
                                    <span class="badge bg-warning status-badge">
                                        <i class="fas fa-clock me-1"></i>PENDING
                                    </span>
                                @else
                                    <span class="badge bg-danger status-badge">
                                        <i class="fas fa-times-circle me-1"></i>CANCELLED
                                    </span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d/m/Y H:i') }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.pesanan.show', $pemesanan->id) }}" 
                                       class="btn btn-outline-primary" 
                                       title="Lihat Detail">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <form action="{{ route('admin.pesanan.destroy', $pemesanan->id) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Hapus pesanan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted mt-3">Belum ada pesanan</h4>
                    <p class="text-muted">Tidak ada data pesanan yang ditemukan.</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Statistik -->
        @if($pemesanans->count() > 0)
        <div class="row mt-4">
            <div class="col-md-3 mb-3">
                <div class="stat-card success">
                    <i class="fas fa-check-circle fa-2x text-success mb-3"></i>
                    <h4>{{ $pemesanans->where('status', 'confirmed')->count() }}</h4>
                    <p class="mb-0 fw-semibold">Confirmed</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stat-card warning">
                    <i class="fas fa-clock fa-2x text-warning mb-3"></i>
                    <h4>{{ $pemesanans->where('status', 'pending')->count() }}</h4>
                    <p class="mb-0 fw-semibold">Pending</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stat-card danger">
                    <i class="fas fa-times-circle fa-2x text-danger mb-3"></i>
                    <h4>{{ $pemesanans->where('status', 'cancelled')->count() }}</h4>
                    <p class="mb-0 fw-semibold">Cancelled</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stat-card primary">
                    <i class="fas fa-money-bill-wave fa-2x text-primary mb-3"></i>
                    <h4>Rp {{ number_format($pemesanans->sum('total_harga'), 0, ',', '.') }}</h4>
                    <p class="mb-0 fw-semibold">Total Revenue</p>
                </div>
            </div>
        </div>
        @endif
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