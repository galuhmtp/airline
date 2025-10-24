<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal - Wi Wok De Tok Airlines</title>
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

        .card-header.bg-warning {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
            color: white !important;
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

        /* Form Controls */
        .form-control, .form-select {
            border-radius: 10px;
            padding: 12px 15px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        .input-group-text {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            border-radius: 10px 0 0 10px;
        }

        /* Alerts */
        .alert {
            border-radius: 10px;
            border: none;
        }

        .alert-danger {
            background: linear-gradient(135deg, #fecaca 0%, #fca5a5 100%);
            color: #7f1d1d;
            border-left: 4px solid #ef4444;
        }

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
        }

        /* Flight Info Card */
        .flight-info-card {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 15px;
            padding: 1.5rem;
            border-left: 4px solid var(--primary);
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar-nav {
                text-align: center;
                margin-top: 1rem;
            }
            
            .btn-group {
                width: 100%;
            }
            
            .btn-group .btn {
                flex: 1;
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
                    <li class="nav-item"><a href="/admin/penerbangan" class="nav-link active">Kelola Penerbangan</a></li>
                    <li class="nav-item"><a href="/admin/pesanan" class="nav-link">Data Pesanan</a></li>
                    <li class="nav-item"><a href="/admin/users" class="nav-link">Data User</a></li>
                    <li class="nav-item"><a href="/admin/kota" class="nav-link">Kelola Kota</a></li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link text-light">
                            <i class="fas fa-sign-out-alt me-1"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb breadcrumb-custom" style="background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%); border-radius: 10px; padding: 1rem 1.5rem;">
                <li class="breadcrumb-item"><a href="/admin/dashboard" class="text-primary text-decoration-none fw-semibold"><i class="fas fa-home me-1"></i>Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/admin/penerbangan" class="text-primary text-decoration-none fw-semibold"><i class="fas fa-plane me-1"></i>Kelola Penerbangan</a></li>
                <li class="breadcrumb-item active fw-semibold"><i class="fas fa-edit me-1"></i>Edit Jadwal</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 text-primary">
                <i class="fas fa-edit me-2"></i>Edit Jadwal Penerbangan
            </h2>
            <span class="badge badge-gradient">{{ $penerbangan->kode_penerbangan }}</span>
        </div>

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <!-- Current Flight Info -->
        <div class="flight-info-card mb-4">
            <div class="row">
                <div class="col-md-4">
                    <small class="text-muted fw-semibold">Kode Penerbangan</small>
                    <p class="fw-bold text-primary mb-0">{{ $penerbangan->kode_penerbangan }}</p>
                </div>
                <div class="col-md-4">
                    <small class="text-muted fw-semibold">Rute</small>
                    <p class="fw-bold mb-0">{{ $penerbangan->asal }} → {{ $penerbangan->tujuan }}</p>
                </div>
                <div class="col-md-4">
                    <small class="text-muted fw-semibold">Waktu Keberangkatan</small>
                    <p class="fw-bold mb-0">{{ \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('d F Y H:i') }}</p>
                </div>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0"><i class="fas fa-pen-to-square me-2"></i>Form Edit Jadwal</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.penerbangan.update', $penerbangan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Kode Penerbangan</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-code"></i>
                                </span>
                                <input type="text" name="kode_penerbangan" class="form-control" 
                                       value="{{ $penerbangan->kode_penerbangan }}" required
                                       placeholder="Contoh: WWDT-105">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Harga Tiket (Rp)</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-tag"></i>
                                </span>
                                <input type="number" name="harga" class="form-control" 
                                       value="{{ $penerbangan->harga }}" required
                                       placeholder="Contoh: 850000">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Asal</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-plane-departure"></i>
                                </span>
                                <select name="asal" class="form-select" required>
                                    <option value="">-- Pilih Kota Asal --</option>
                                    @foreach($kotas as $k)
                                    <option value="{{ $k->nama_kota }} ({{ $k->kode_bandara }})" 
                                        {{ $penerbangan->asal == $k->nama_kota . ' (' . $k->kode_bandara . ')' ? 'selected' : '' }}>
                                        {{ $k->nama_kota }} ({{ $k->kode_bandara }})
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tujuan</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-plane-arrival"></i>
                                </span>
                                <select name="tujuan" class="form-select" required>
                                    <option value="">-- Pilih Kota Tujuan --</option>
                                    @foreach($kotas as $k)
                                    <option value="{{ $k->nama_kota }} ({{ $k->kode_bandara }})"
                                        {{ $penerbangan->tujuan == $k->nama_kota . ' (' . $k->kode_bandara . ')' ? 'selected' : '' }}>
                                        {{ $k->nama_kota }} ({{ $k->kode_bandara }})
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Tanggal Keberangkatan</label>
                            @php
                                $waktu = \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan);
                                $tanggal = $waktu->format('Y-m-d');
                                $jam = $waktu->format('H:i');
                            @endphp
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-calendar"></i>
                                </span>
                                <input type="date" name="tanggal_keberangkatan" class="form-control" 
                                       value="{{ $tanggal }}" required
                                       min="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Jam Keberangkatan</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-clock"></i>
                                </span>
                                <input type="time" name="jam_keberangkatan" class="form-control" 
                                       value="{{ $jam }}" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-end mt-4">
                        <div class="btn-group" role="group">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-outline-secondary px-4">
                                <i class="fas fa-arrow-left me-2"></i>Kembali
                            </a>
                            <button type="submit" class="btn btn-gradient px-4">
                                <i class="fas fa-save me-2"></i>Update Jadwal
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card border-0 bg-light">
                    <div class="card-body text-center">
                        <i class="fas fa-info-circle text-primary fa-2x mb-3"></i>
                        <h6 class="fw-bold">Informasi</h6>
                        <p class="small text-muted mb-0">Pastikan data yang diubah sudah benar sebelum menyimpan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-light">
                    <div class="card-body text-center">
                        <i class="fas fa-exclamation-triangle text-warning fa-2x mb-3"></i>
                        <h6 class="fw-bold">Peringatan</h6>
                        <p class="small text-muted mb-0">Perubahan jadwal dapat mempengaruhi pesanan yang sudah ada</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-light">
                    <div class="card-body text-center">
                        <i class="fas fa-history text-info fa-2x mb-3"></i>
                        <h6 class="fw-bold">Riwayat</h6>
                        <p class="small text-muted mb-0">Terakhir diupdate: {{ \Carbon\Carbon::parse($penerbangan->updated_at)->format('d M Y H:i') }}</p>
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