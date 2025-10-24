<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket - Wi Wok De Tok Airlines</title>
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
        footer {
            background-color: #0d6efd;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 60px;
        }
        .flight-info {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="/">Wi Wok De Tok</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="/penerbangan" class="nav-link">Penerbangan</a></li>
                    <li class="nav-item"><a href="/pemesanan" class="nav-link active fw-bold">Pemesanan Saya</a></li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container utama -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Form Pemesanan Tiket</h5>
                    </div>
                    <div class="card-body">
                        @if(isset($penerbangan))
                        <!-- Data penerbangan -->
                        <div class="flight-info mb-4">
                            <h6 class="fw-bold text-primary">Detail Penerbangan</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1"><strong>Kode:</strong> {{ $penerbangan->kode_penerbangan }}</p>
                                    <p class="mb-1"><strong>Asal:</strong> {{ $penerbangan->asal }}</p>
                                    <p class="mb-1"><strong>Tujuan:</strong> {{ $penerbangan->tujuan }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1"><strong>Waktu Keberangkatan:</strong> 
                                        {{ \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('d F Y H:i') }}
                                    </p>
                                    <p class="mb-0"><strong>Harga per Tiket:</strong> Rp {{ number_format($penerbangan->harga, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <form method="POST" action="{{ route('pemesanan.store') }}">
                            @csrf
                            <input type="hidden" name="penerbangan_id" value="{{ $penerbangan->id }}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Penumpang</label>
                                        <input type="text" class="form-control" name="nama_penumpang" placeholder="Masukkan nama lengkap" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nomor HP</label>
                                        <input type="text" class="form-control" name="no_hp" placeholder="08xxxxxxxxxx" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Jumlah Tiket</label>
                                        <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket" min="1" max="10" value="1" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Total Harga</label>
                                        <input type="text" class="form-control" id="total_harga" value="Rp {{ number_format($penerbangan->harga, 0, ',', '.') }}" readonly>
                                        <input type="hidden" id="harga_per_tiket" value="{{ $penerbangan->harga }}">
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-success btn-lg">Konfirmasi Pesanan</button>
                            </div>
                        </form>
                        @else
                        <div class="alert alert-warning">
                            <p>Data penerbangan tidak ditemukan.</p>
                            <a href="/penerbangan" class="btn btn-primary">Pilih Penerbangan</a>
                        </div>
                        @endif
                    </div>
                </div>

                <div class="text-center mt-3">
                    <a href="javascript:history.back()" class="btn btn-secondary">← Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        &copy; 2025 Wi Wok De Tok Airlines
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Hitung total harga otomatis
        const jumlahTiket = document.getElementById('jumlah_tiket');
        const totalHarga = document.getElementById('total_harga');
        const hargaPerTiket = document.getElementById('harga_per_tiket').value;

        function hitungTotalHarga() {
            const jumlah = parseInt(jumlahTiket.value) || 1;
            const total = hargaPerTiket * jumlah;
            totalHarga.value = 'Rp ' + total.toLocaleString('id-ID');
        }

        jumlahTiket.addEventListener('input', hitungTotalHarga);
        
        // Hitung saat halaman pertama kali dimuat
        hitungTotalHarga();

        // Validasi form
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const nama = document.querySelector('input[name="nama_penumpang"]').value;
            const noHp = document.querySelector('input[name="no_hp"]').value;
            
            if (!nama || !noHp) {
                e.preventDefault();
                alert('Harap lengkapi semua data penumpang!');
            }
        });
    </script>
</body>
</html>