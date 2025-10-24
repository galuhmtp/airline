<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/admin/dashboard">Wi Wok De Tok Admin</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="/admin/dashboard" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="/admin/penerbangan" class="nav-link">Kelola Penerbangan</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link text-danger">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h3 class="fw-bold mb-4">Edit Jadwal Penerbangan</h3>

        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-warning text-dark">
                Form Edit Jadwal
            </div>
            <div class="card-body">
                <form action="{{ route('admin.penerbangan.update', $penerbangan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Kode Penerbangan</label>
                            <input type="text" name="kode_penerbangan" class="form-control" 
                                   value="{{ $penerbangan->kode_penerbangan }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Asal</label>
                            <select name="asal" class="form-select" required>
                                <option value="">-- Pilih Asal --</option>
                                @foreach($kotas as $k)
                                <option value="{{ $k->nama_kota }} ({{ $k->kode_bandara }})" 
                                    {{ $penerbangan->asal == $k->nama_kota . ' (' . $k->kode_bandara . ')' ? 'selected' : '' }}>
                                    {{ $k->nama_kota }} ({{ $k->kode_bandara }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tujuan</label>
                            <select name="tujuan" class="form-select" required>
                                <option value="">-- Pilih Tujuan --</option>
                                @foreach($kotas as $k)
                                <option value="{{ $k->nama_kota }} ({{ $k->kode_bandara }})"
                                    {{ $penerbangan->tujuan == $k->nama_kota . ' (' . $k->kode_bandara . ')' ? 'selected' : '' }}>
                                    {{ $k->nama_kota }} ({{ $k->kode_bandara }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Harga Tiket (Rp)</label>
                            <input type="number" name="harga" class="form-control" 
                                   value="{{ $penerbangan->harga }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal Keberangkatan</label>
                            @php
                                $waktu = \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan);
                                $tanggal = $waktu->format('Y-m-d');
                                $jam = $waktu->format('H:i');
                            @endphp
                            <input type="date" name="tanggal_keberangkatan" class="form-control" 
                                   value="{{ $tanggal }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Jam Keberangkatan</label>
                            <input type="time" name="jam_keberangkatan" class="form-control" 
                                   value="{{ $jam }}" required>
                        </div>
                    </div>
                    <div class="text-end mt-4">
                        <button type="submit" class="btn btn-primary px-4">Update Jadwal</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary px-4">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>