<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }

        .card {
            border-radius: 10px;
        }

        .table th {
            background-color: #0d6efd;
            color: white;
        }

        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">Wi Wok De Tok Admin</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/admin/dashboard" class="nav-link fw-bold text-primary">Dashboard</a></li>
                    <li class="nav-item"><a href="/admin/pesanan" class="nav-link">Data Pesanan</a></li>
                    <li class="nav-item"><a href="/admin/users" class="nav-link">Data User</a></li>
                    <li class="nav-item"><a href="/admin/kota" class="nav-link">Kelola Kota</a></li>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-danger p-0 m-0" style="text-decoration:none;">
                            Logout
                        </button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="container mt-4">
        <h2 class="fw-bold mb-4">Dashboard Admin - Wi Wok De Tok Airlines</h2>

        <!-- Alert Messages -->
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                Tambah Jadwal Penerbangan Baru
            </div>
            <div class="card-body">
                <form action="{{ route('admin.penerbangan.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Kode Penerbangan</label>
                            <input type="text" name="kode_penerbangan" class="form-control" placeholder="Contoh: WWDT-105" required>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Asal</label>
                            <select name="asal" class="form-select" required>
                                <option value="">-- Pilih Asal --</option>
                                @foreach($kotas as $k)
                                <option value="{{ $k->nama_kota }} ({{ $k->kode_bandara }})">
                                    {{ $k->nama_kota }} ({{ $k->kode_bandara }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tujuan</label>
                            <select name="tujuan" class="form-select" required>
                                <option value="">-- Pilih Tujuan --</option>
                                @foreach($kotas as $k)
                                <option value="{{ $k->nama_kota }} ({{ $k->kode_bandara }})">
                                    {{ $k->nama_kota }} ({{ $k->kode_bandara }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Harga Tiket (Rp)</label>
                            <input type="number" name="harga" class="form-control" placeholder="850000" required>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Tanggal Keberangkatan</label>
                                <input type="date" name="tanggal_keberangkatan" class="form-control"
                                    min="{{ date('Y-m-d') }}" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Jam Keberangkatan</label>
                                <input type="time" name="jam_keberangkatan" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-success px-4">Tambah Jadwal</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Daftar Jadwal -->
        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">
                Daftar Jadwal Penerbangan
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Asal</th>
                                <th>Tujuan</th>
                                <th>Waktu Keberangkatan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($penerbangans as $p)
                            <tr>
                                <td>{{ $p->kode_penerbangan }}</td>
                                <td>{{ $p->asal }}</td>
                                <td>{{ $p->tujuan }}</td>
                                <td>{{ \Carbon\Carbon::parse($p->waktu_keberangkatan)->format('d-m-Y H:i') }}</td>
                                <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('admin.penerbangan.edit', $p->id) }}" class="btn btn-sm btn-warning me-2">Edit</a>
                                    <form action="{{ route('admin.penerbangan.delete') }}" method="POST" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $p->id }}">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data jadwal penerbangan</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Wi Wok De Tok Airlines Admin Panel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>