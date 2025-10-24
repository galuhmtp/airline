<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan - Wi Wok De Tok Airlines</title>
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
        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px;
        }
        .status-badge {
            font-size: 0.8em;
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Data Pesanan Pengguna</h3>
            <span class="badge bg-primary fs-6">Total: {{ $pemesanans->count() }} Pesanan</span>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body table-responsive">
                @if($pemesanans->count() > 0)
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
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
                                <strong>{{ $pemesanan->kode_booking }}</strong>
                            </td>
                            <td>{{ $pemesanan->nama_penumpang }}</td>
                            <td>{{ $pemesanan->no_hp }}</td>
                            <td>
                                <small class="text-muted">Kode:</small><br>
                                <strong>{{ $pemesanan->penerbangan->kode_penerbangan }}</strong>
                            </td>
                            <td>
                                <small>{{ $pemesanan->penerbangan->asal }}</small><br>
                                <i class="bi bi-arrow-right"></i><br>
                                <small>{{ $pemesanan->penerbangan->tujuan }}</small>
                            </td>
                            <td class="text-center">{{ $pemesanan->jumlah_tiket }}</td>
                            <td>Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</td>
                            <td>
                                @if($pemesanan->status == 'confirmed')
                                    <span class="badge bg-success status-badge">CONFIRMED</span>
                                @elseif($pemesanan->status == 'pending')
                                    <span class="badge bg-warning status-badge">PENDING</span>
                                @else
                                    <span class="badge bg-danger status-badge">CANCELLED</span>
                                @endif
                            </td>
                            <td>{{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d/m/Y H:i') }}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.pesanan.show', $pemesanan->id) }}" 
                                       class="btn btn-primary" 
                                       title="Lihat Detail">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form action="{{ route('admin.pesanan.destroy', $pemesanan->id) }}" 
                                          method="POST" 
                                          class="d-inline"
                                          onsubmit="return confirm('Hapus pesanan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Hapus">
                                            <i class="bi bi-trash"></i>
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
                    <i class="bi bi-inbox display-1 text-muted"></i>
                    <h4 class="text-muted mt-3">Belum ada pesanan</h4>
                    <p class="text-muted">Tidak ada data pesanan yang ditemukan.</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Statistik -->
        @if($pemesanans->count() > 0)
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <h4>{{ $pemesanans->where('status', 'confirmed')->count() }}</h4>
                        <p class="mb-0">Confirmed</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-dark">
                    <div class="card-body text-center">
                        <h4>{{ $pemesanans->where('status', 'pending')->count() }}</h4>
                        <p class="mb-0">Pending</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body text-center">
                        <h4>{{ $pemesanans->where('status', 'cancelled')->count() }}</h4>
                        <p class="mb-0">Cancelled</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h4>Rp {{ number_format($pemesanans->sum('total_harga'), 0, ',', '.') }}</h4>
                        <p class="mb-0">Total Revenue</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <footer>
        &copy; 2025 Wi Wok De Tok Airlines Admin Panel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>