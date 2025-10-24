<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }
        .detail-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .flight-route {
            background: linear-gradient(45deg, #0d6efd, #1e90ff);
            color: white;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/admin/dashboard">Wi Wok De Tok Admin</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/admin/dashboard" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="/admin/pesanan" class="nav-link fw-bold text-primary">Data Pesanan</a></li>
                <li class="nav-item"><a href="/admin/users" class="nav-link">Data User</a></li>
                <li class="nav-item"><a href="/admin/kota" class="nav-link">Kelola Kota</a></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link text-danger border-0 bg-transparent">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/admin/pesanan">Data Pesanan</a></li>
                <li class="breadcrumb-item active">Detail Pesanan</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Detail Pesanan</h3>
            <span class="badge bg-primary fs-6">Kode: {{ $pemesanan->kode_booking }}</span>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-8">
                <!-- Informasi Penerbangan -->
                <div class="card detail-card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0"><i class="bi bi-airplane"></i> Informasi Penerbangan</h5>
                    </div>
                    <div class="card-body">
                        <div class="flight-route text-center mb-4">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3>{{ $pemesanan->penerbangan->asal }}</h3>
                                    <p class="mb-0">Bandara Keberangkatan</p>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-arrow-right display-4"></i>
                                </div>
                                <div class="col">
                                    <h3>{{ $pemesanan->penerbangan->tujuan }}</h3>
                                    <p class="mb-0">Bandara Tujuan</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Kode Penerbangan:</strong></td>
                                        <td>{{ $pemesanan->penerbangan->kode_penerbangan }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Maskapai:</strong></td>
                                        <td>Wi Wok De Tok Airlines</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Waktu Keberangkatan:</strong></td>
                                        <td>{{ \Carbon\Carbon::parse($pemesanan->penerbangan->waktu_keberangkatan)->format('d F Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Harga per Tiket:</strong></td>
                                        <td>Rp {{ number_format($pemesanan->penerbangan->harga, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Kelas:</strong></td>
                                        <td>Economy</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Durasi:</strong></td>
                                        <td>± 2 jam</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Penumpang -->
                <div class="card detail-card">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0"><i class="bi bi-person"></i> Informasi Penumpang</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Nama Penumpang:</strong></td>
                                        <td>{{ $pemesanan->nama_penumpang }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>No. HP:</strong></td>
                                        <td>{{ $pemesanan->no_hp }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <td><strong>Jumlah Tiket:</strong></td>
                                        <td>{{ $pemesanan->jumlah_tiket }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Total Harga:</strong></td>
                                        <td class="fw-bold text-primary">Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</td>
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
                        <h5 class="mb-0"><i class="bi bi-receipt"></i> Informasi Pesanan</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tr>
                                <td><strong>Kode Booking:</strong></td>
                                <td><code>{{ $pemesanan->kode_booking }}</code></td>
                            </tr>
                            <tr>
                                <td><strong>Status:</strong></td>
                                <td>
                                    @if($pemesanan->status == 'confirmed')
                                        <span class="badge bg-success">CONFIRMED</span>
                                    @elseif($pemesanan->status == 'pending')
                                        <span class="badge bg-warning">PENDING</span>
                                    @else
                                        <span class="badge bg-danger">CANCELLED</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Pesan:</strong></td>
                                <td>{{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d F Y H:i') }}</td>
                            </tr>
                            <tr>
                                <td><strong>Terakhir Update:</strong></td>
                                <td>{{ \Carbon\Carbon::parse($pemesanan->updated_at)->format('d F Y H:i') }}</td>
                            </tr>
                        </table>

                        <!-- Update Status -->
                        <form action="{{ route('admin.pesanan.updateStatus', $pemesanan->id) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label"><strong>Update Status:</strong></label>
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
                        <h5 class="mb-0"><i class="bi bi-gear"></i> Aksi</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route('admin.pesanan') }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <form action="{{ route('admin.pesanan.destroy', $pemesanan->id) }}" method="POST" class="d-grid">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus pesanan ini?')">
                                    <i class="bi bi-trash"></i> Hapus Pesanan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5">
        &copy; 2025 Wi Wok De Tok Airlines Admin Panel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>