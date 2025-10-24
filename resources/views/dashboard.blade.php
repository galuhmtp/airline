<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Wi Wok De Tok Airlines</title>
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
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            min-height: 100vh;
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

        .plane-icon {
            display: inline-block;
            animation: fly 3s ease-in-out infinite;
        }

        @keyframes fly {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-8px) rotate(-5deg); }
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 600;
            transition: all 0.3s ease;
            padding: 8px 16px !important;
            border-radius: 8px;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white !important;
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.3);
            color: white !important;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            padding: 60px 0;
            margin-bottom: 0;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            opacity: 0.3;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 800;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            position: relative;
        }

        .hero p {
            font-size: 1.2rem;
            position: relative;
        }

        /* Search Card */
        .search-card {
            margin-top: -50px;
            position: relative;
            z-index: 10;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
            padding: 40px;
            border: none;
        }

        .search-card h4 {
            color: #1f2937;
            font-weight: 800;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: 600;
            color: #4b5563;
            margin-bottom: 8px;
        }

        .form-select, .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
        }

        .form-select:focus, .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 40px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
            color: white;
        }

        .btn-gradient:disabled {
            background: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
            transform: none;
            cursor: not-allowed;
        }

        /* Results Section */
        #hasilPencarian {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            color: #1f2937;
            font-weight: 800;
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 2px;
        }

        /* Table Styling */
        .table-container {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .table {
            margin-bottom: 0;
        }

        .table thead {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
        }

        .table thead th {
            border: none;
            padding: 16px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .table thead th:first-child {
            border-radius: 10px 0 0 0;
        }

        .table thead th:last-child {
            border-radius: 0 10px 0 0;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background: #f9fafb;
            transform: scale(1.01);
        }

        .table tbody td {
            padding: 16px;
            vertical-align: middle;
            border-bottom: 1px solid #f3f4f6;
        }

        .btn-detail {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border: none;
            color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-detail:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            color: white;
        }

        /* Alert Styling */
        .alert-gradient {
            background: linear-gradient(135deg, #dbeafe 0%, #e0e7ff 100%);
            border: none;
            border-left: 4px solid var(--primary);
            color: #1e40af;
            border-radius: 10px;
            padding: 15px 20px;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 30px 0;
            margin-top: 80px;
        }

        /* Loading Animation */
        .loading-text {
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* Badge */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.75rem;
        }

        /* Dropdown Custom */
        .dropdown-item {
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding-left: 25px;
        }

        /* Logout Button */
        .btn-logout {
            background: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.4);
            color: white;
            font-weight: 600;
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
            color: white;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #6b7280;
        }

        .empty-state i {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.3;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }

            .search-card {
                padding: 25px;
                margin-top: -30px;
            }

            .table-container {
                overflow-x: auto;
            }
        }

        /* Price Highlight */
        .price-highlight {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
        }

        /* Code Badge */
        .code-badge {
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            color: #1f2937;
            font-family: 'Courier New', monospace;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <span class="plane-icon">✈️</span>
                Wi Wok De Tok Airlines
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navmenu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link active">
                            <i class="fas fa-home me-2"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/penerbangan" class="nav-link">
                            <i class="fas fa-plane me-2"></i>Penerbangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pemesanan" class="nav-link">
                            <i class="fas fa-ticket-alt me-2"></i>Pemesanan Saya
                        </a>
                    </li>
                    <li class="nav-item ms-3">
                        <form method="POST" action="{{ route('logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-logout">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero text-center">
        <div class="container">
            <h1 class="mb-3">
                <i class="fas fa-globe-asia me-3"></i>
                Selamat Datang di Wi Wok De Tok Airlines
            </h1>
            <p class="lead mb-0">Pesan tiket pesawat Anda dengan cepat, mudah, dan aman</p>
        </div>
    </section>

    <!-- Form Pencarian -->
    <div class="container">
        <div class="search-card">
            <div class="text-center mb-4">
                <span class="badge badge-gradient mb-2">
                    <i class="fas fa-search me-2"></i>Pencarian Penerbangan
                </span>
                <h4 class="fw-bold">Cari Jadwal Penerbangan</h4>
                <p class="text-muted mb-0">Temukan penerbangan terbaik untuk perjalanan Anda</p>
            </div>
            
            <form id="searchForm">
                @csrf
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label">
                            <i class="fas fa-plane-departure me-2 text-primary"></i>Kota Asal
                        </label>
                        <select class="form-select" id="asal" name="asal" required>
                            <option value="">-- Pilih Kota Asal --</option>
                            @foreach($kotas as $kota)
                            <option value="{{ $kota->nama_kota }}">{{ $kota->nama_kota }} ({{ $kota->kode_bandara }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">
                            <i class="fas fa-plane-arrival me-2 text-primary"></i>Kota Tujuan
                        </label>
                        <select class="form-select" id="tujuan" name="tujuan" required>
                            <option value="">-- Pilih Kota Tujuan --</option>
                            @foreach($kotas as $kota)
                            <option value="{{ $kota->nama_kota }}">{{ $kota->nama_kota }} ({{ $kota->kode_bandara }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">
                            <i class="fas fa-calendar-alt me-2 text-primary"></i>Tanggal Keberangkatan
                        </label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                        <small class="text-muted">
                            <i class="fas fa-info-circle me-1"></i>Opsional - kosongkan untuk semua tanggal
                        </small>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-gradient px-5">
                        <i class="fas fa-search me-2"></i>Cari Penerbangan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Hasil Pencarian -->
    <div class="container mt-5" id="hasilPencarian" style="display:none;">
        <div class="text-center mb-4">
            <h4 class="section-title">
                <i class="fas fa-list-alt me-2"></i>Hasil Pencarian
            </h4>
        </div>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th><i class="fas fa-barcode me-2"></i>Kode</th>
                            <th><i class="fas fa-map-marker-alt me-2"></i>Asal</th>
                            <th><i class="fas fa-map-marker-alt me-2"></i>Tujuan</th>
                            <th><i class="fas fa-clock me-2"></i>Keberangkatan</th>
                            <th><i class="fas fa-money-bill-wave me-2"></i>Harga</th>
                            <th><i class="fas fa-cog me-2"></i>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="hasilTabel">
                        <!-- hasil dari pencarian akan ditampilkan di sini -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Daftar Semua Penerbangan -->
    <div class="container mt-5">
        <div class="text-center mb-4">
            <span class="badge badge-gradient mb-2">
                <i class="fas fa-plane me-2"></i>Penerbangan Tersedia
            </span>
            <h4 class="section-title">Semua Penerbangan Tersedia</h4>
        </div>
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th><i class="fas fa-barcode me-2"></i>Kode</th>
                            <th><i class="fas fa-map-marker-alt me-2"></i>Asal</th>
                            <th><i class="fas fa-map-marker-alt me-2"></i>Tujuan</th>
                            <th><i class="fas fa-clock me-2"></i>Keberangkatan</th>
                            <th><i class="fas fa-money-bill-wave me-2"></i>Harga</th>
                            <th><i class="fas fa-cog me-2"></i>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penerbangans as $penerbangan)
                        <tr>
                            <td>
                                <span class="code-badge">{{ $penerbangan->kode_penerbangan ?? 'N/A' }}</span>
                            </td>
                            <td>
                                <i class="fas fa-plane-departure me-2 text-primary"></i>
                                <strong>{{ $penerbangan->rute_asal ?? 'N/A' }}</strong>
                            </td>
                            <td>
                                <i class="fas fa-plane-arrival me-2 text-success"></i>
                                <strong>{{ $penerbangan->rute_tujuan ?? 'N/A' }}</strong>
                            </td>
                            <td>
                                <i class="far fa-calendar me-2 text-muted"></i>
                                {{ $penerbangan->waktu_keberangkatan ? \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('d M Y, H:i') : 'N/A' }}
                            </td>
                            <td>
                                <span class="price-highlight">Rp {{ number_format($penerbangan->harga ?? 0, 0, ',', '.') }}</span>
                            </td>
                            <td>
                                <a href="/penerbangan/{{ $penerbangan->id }}" class="btn btn-detail btn-sm">
                                    <i class="fas fa-info-circle me-1"></i>Detail
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">
                <i class="fas fa-plane me-2"></i>
                &copy; 2025 Wi Wok De Tok Airlines. All rights reserved.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const form = document.getElementById('searchForm');
        const hasil = document.getElementById('hasilPencarian');
        const tabel = document.getElementById('hasilTabel');

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const asal = document.getElementById('asal').value;
            const tujuan = document.getElementById('tujuan').value;

            // Validasi: asal dan tujuan harus diisi
            if (!asal || !tujuan) {
                alert('Silakan pilih kota asal dan tujuan!');
                return;
            }

            // Validasi: asal dan tujuan tidak boleh sama
            if (asal === tujuan) {
                alert('Kota asal dan tujuan tidak boleh sama!');
                return;
            }

            const formData = new FormData(form);

            console.log('Mencari penerbangan:', {
                asal: asal,
                tujuan: tujuan,
                tanggal: document.getElementById('tanggal').value
            });

            // Tampilkan loading
            tabel.innerHTML = `
                <tr>
                    <td colspan="6" class="text-center py-5">
                        <div class="spinner-border text-primary mb-3" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="loading-text mb-0"><i class="fas fa-search me-2"></i>Mencari penerbangan...</p>
                    </td>
                </tr>
            `;
            hasil.style.display = 'block';

            // Kirim request AJAX untuk pencarian
            fetch('{{ route("penerbangan.search") }}', {
                    method: 'POST',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok: ' + response.status);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Data diterima:', data);
                    tabel.innerHTML = ''; // hapus hasil sebelumnya

                    if (data.length === 0) {
                        tabel.innerHTML = `
                            <tr>
                                <td colspan="6">
                                    <div class="empty-state">
                                        <i class="fas fa-search"></i>
                                        <h5>Tidak Ada Penerbangan Ditemukan</h5>
                                        <p>Tidak ada jadwal penerbangan yang sesuai dengan pencarian Anda.</p>
                                    </div>
                                </td>
                            </tr>
                        `;
                        console.log('Tidak ada data yang match dengan pencarian');
                    } else {
                        data.forEach(f => {
                            console.log('Processing flight:', f);

                            // Format tanggal
                            let formattedWaktu = 'N/A';
                            if (f.waktu_keberangkatan) {
                                const waktuDate = new Date(f.waktu_keberangkatan);
                                const options = { 
                                    year: 'numeric', 
                                    month: 'short', 
                                    day: '2-digit',
                                    hour: '2-digit', 
                                    minute: '2-digit' 
                                };
                                formattedWaktu = waktuDate.toLocaleDateString('id-ID', options);
                            }

                            // Format harga
                            const formattedHarga = 'Rp ' + f.harga.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                            tabel.innerHTML += `
                                <tr>
                                    <td>
                                        <span class="code-badge">${f.kode_penerbangan || 'N/A'}</span>
                                    </td>
                                    <td>
                                        <i class="fas fa-plane-departure me-2 text-primary"></i>
                                        <strong>${f.asal || 'N/A'}</strong>
                                    </td>
                                    <td>
                                        <i class="fas fa-plane-arrival me-2 text-success"></i>
                                        <strong>${f.tujuan || 'N/A'}</strong>
                                    </td>
                                    <td>
                                        <i class="far fa-calendar me-2 text-muted"></i>
                                        ${formattedWaktu}
                                    </td>
                                    <td>
                                        <span class="price-highlight">${formattedHarga}</span>
                                    </td>
                                    <td>
                                        <a href="/penerbangan/${f.id}" class="btn btn-detail btn-sm">
                                            <i class="fas fa-info-circle me-1"></i>Detail
                                        </a>
                                    </td>
                                </tr>
                            `;
                        });
                    }

                    hasil.style.display = 'block';

                    // Scroll ke hasil pencarian
                    hasil.scrollIntoView({
                        behavior: 'smooth'
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    tabel.innerHTML = `
                        <tr>
                            <td colspan="6">
                                <div class="empty-state">
                                    <i class="fas fa-exclamation-triangle text-danger"></i>
                                    <h5>Terjadi Kesalahan</h5>
                                    <p>Terjadi kesalahan saat mencari data: ${error.message}</p>
                                </div>
                            </td>
                        </tr>
                    `;
                    hasil.style.display = 'block';
                });
        });

        // Validasi real-time untuk mencegah asal dan tujuan sama
        document.getElementById('asal').addEventListener('change', validateCities);
        document.getElementById('tujuan').addEventListener('change', validateCities);

        function validateCities() {
            const asal = document.getElementById('asal').value;
            const tujuan = document.getElementById('tujuan').value;
            const submitBtn = form.querySelector('button[type="submit"]');

            if (asal && tujuan && asal === tujuan) {
                submitBtn.disabled = true;
                submitBtn.title = 'Kota asal dan tujuan tidak boleh sama';
            } else {
                submitBtn.disabled = false;
                submitBtn.title = '';
            }
        }

        // Debug: log data kota yang tersedia
        document.addEventListener('DOMContentLoaded', function() {
            const kotaOptions = document.querySelectorAll('#asal option, #tujuan option');
            console.log('Kota yang tersedia:');
            kotaOptions.forEach(option => {
                if (option.value) {
                    console.log(option.value);
                }
            });
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>