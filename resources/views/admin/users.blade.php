<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/admin/dashboard">Wi Wok De Tok Admin</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/admin/dashboard" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="/admin/pesanan" class="nav-link">Data Pesanan</a></li>
                <li class="nav-item"><a href="/admin/users" class="nav-link fw-bold text-primary">Data User</a></li>
                <li class="nav-item"><a href="/admin/kota" class="nav-link">Kelola Kota</a></li>
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
        <h3 class="fw-bold mb-4">Data User Terdaftar</h3>

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

        <div class="card shadow-sm">
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Tanggal Registrasi</th>
                            <th>Status</th>
                            <th>Aksi</th> <!-- TAMBAHKAN KOLOM INI -->
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="badge {{ $user->role === 'admin' ? 'bg-danger' : 'bg-secondary' }}">
                                    {{ ucfirst($user->role ?? 'user') }}
                                </span>
                            </td>
                            <td>{{ \Carbon\Carbon::parse($user->created_at)->format('Y-m-d') }}</td>
                            <td>
                                <span class="badge {{ $user->email_verified_at ? 'bg-success' : 'bg-warning' }}">
                                    {{ $user->email_verified_at ? 'Aktif' : 'Belum Verifikasi' }}
                                </span>
                            </td>
                            <td>
                                @if($user->id != auth()->id()) <!-- Jangan tampilkan tombol delete untuk user sendiri -->
                                <form action="{{ route('admin.users.delete') }}" method="POST" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button type="submit" class="btn btn-sm btn-danger" 
                                            onclick="return confirm('Yakin ingin menghapus user {{ $user->name }}?')">
                                        Hapus
                                    </button>
                                </form>
                                @else
                                <span class="text-muted">Akun sendiri</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data user</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Wi Wok De Tok Airlines Admin Panel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>