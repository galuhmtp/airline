<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kota - Wi Wok De Tok Airlines</title>
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

        .card-header.bg-secondary {
            background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%) !important;
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

        .btn-outline-danger {
            border-color: #ef4444;
            color: #ef4444;
        }

        .btn-outline-danger:hover {
            background-color: #ef4444;
            border-color: #ef4444;
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

        /* City Card */
        .city-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
        }

        .city-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.12);
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
                    <li class="nav-item"><a href="/admin/pesanan" class="nav-link">Data Pesanan</a></li>
                    <li class="nav-item"><a href="/admin/users" class="nav-link">Data User</a></li>
                    <li class="nav-item"><a href="/admin/kota" class="nav-link fw-bold active">Kelola Kota</a></li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
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
                <i class="fas fa-city me-2"></i>Kelola Kota Keberangkatan & Tujuan
            </h2>
            <span class="badge badge-gradient">Total: {{ $kotas->count() }} Kota</span>
        </div>

        <!-- Alert Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Statistik -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <div class="stat-card primary">
                    <i class="fas fa-city fa-2x text-primary mb-3"></i>
                    <h4>{{ $kotas->count() }}</h4>
                    <p class="mb-0 fw-semibold">Total Kota</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="stat-card success">
                    <i class="fas fa-plane-departure fa-2x text-success mb-3"></i>
                    <h4>{{ $kotas->count() }}</h4>
                    <p class="mb-0 fw-semibold">Kota Keberangkatan</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="stat-card warning">
                    <i class="fas fa-plane-arrival fa-2x text-warning mb-3"></i>
                    <h4>{{ $kotas->count() }}</h4>
                    <p class="mb-0 fw-semibold">Kota Tujuan</p>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-plus-circle me-2"></i>Tambah Kota Baru
            </div>
            <div class="card-body">
                <form action="{{ route('admin.kota.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Kota</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="fas fa-city"></i>
                                </span>
                                <input type="text" name="nama_kota" class="form-control" placeholder="Contoh: Jakarta" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Kode Bandara</label>
                            <div class="input-group">
                                <span class="input-group-text bg-primary text-white">
                                    <i class="fas fa-plane"></i>
                                </span>
                                <input type="text" name="kode_bandara" class="form-control" placeholder="Contoh: CGK" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-4">
                        <button class="btn btn-gradient px-4" type="submit">
                            <i class="fas fa-plus me-2"></i>Tambah Kota
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">
                <i class="fas fa-list me-2"></i>Daftar Kota Tersedia
            </div>
            <div class="card-body">
                @if($kotas->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Kota</th>
                                <th>Kode Bandara</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kotas as $k)
                            <tr>
                                <td class="fw-bold">{{ $k->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" 
                                             style="width: 40px; height: 40px; font-weight: bold;">
                                            <i class="fas fa-city"></i>
                                        </div>
                                        <div class="fw-semibold">{{ $k->nama_kota }}</div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-primary fs-6">{{ $k->kode_bandara }}</span>
                                </td>
                                <td>
                                    <form action="{{ route('admin.kota.destroy', $k->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus kota {{ $k->nama_kota }}?')">
                                            <i class="fas fa-trash me-1"></i>Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center py-5">
                    <i class="fas fa-city fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">Belum ada data kota</h4>
                    <p class="text-muted">Tambahkan kota pertama Anda menggunakan form di atas.</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Grid View Alternatif (Opsional) -->
        @if($kotas->count() > 0)
        <div class="mt-4">
            <h5 class="fw-bold mb-3 text-primary">
                <i class="fas fa-th me-2"></i>Tampilan Grid Kota
            </h5>
            <div class="row">
                @foreach($kotas as $k)
                <div class="col-md-4 mb-3">
                    <div class="city-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center" 
                                 style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas fa-city"></i>
                            </div>
                            <span class="badge bg-primary fs-6">{{ $k->kode_bandara }}</span>
                        </div>
                        <h6 class="fw-bold mb-1">{{ $k->nama_kota }}</h6>
                        <p class="text-muted small mb-2">ID: {{ $k->id }}</p>
                        <form action="{{ route('admin.kota.destroy', $k->id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger w-100" onclick="return confirm('Yakin ingin menghapus kota {{ $k->nama_kota }}?')">
                                <i class="fas fa-trash me-1"></i>Hapus Kota
                            </button>
                        </form>
                    </div>
                </div>
                @endforeach
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