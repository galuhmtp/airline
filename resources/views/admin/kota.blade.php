<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kota - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/admin/dashboard">Wi Wok De Tok Admin</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/admin/dashboard" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="/admin/pesanan" class="nav-link">Data Pesanan</a></li>
                <li class="nav-item"><a href="/admin/users" class="nav-link">Data User</a></li>
                <li class="nav-item"><a href="/admin/kota" class="nav-link fw-bold text-primary">Kelola Kota</a></li>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link text-danger p-0 m-0" style="text-decoration:none;">
                            Logout
                        </button>
                    </form>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h3 class="fw-bold mb-4">Kelola Kota Keberangkatan & Tujuan</h3>

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
            <div class="card-header bg-primary text-white">Tambah Kota Baru</div>
            <div class="card-body">
                <form action="{{ route('admin.kota.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Nama Kota</label>
                            <input type="text" name="nama_kota" class="form-control" placeholder="Contoh: Jakarta" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Kode Bandara</label>
                            <input type="text" name="kode_bandara" class="form-control" placeholder="Contoh: CGK" required>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button class="btn btn-success px-4" type="submit">Tambah Kota</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm">
            <div class="card-header bg-secondary text-white">Daftar Kota Tersedia</div>
            <div class="card-body table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nama Kota</th>
                            <th>Kode Bandara</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($kotas as $k)
                        <tr>
                            <td>{{ $k->id }}</td>
                            <td>{{ $k->nama_kota }}</td>
                            <td>{{ $k->kode_bandara }}</td>
                            <td>
                                <form action="{{ route('admin.kota.destroy', $k->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data kota</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>