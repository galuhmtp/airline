<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Tiket - Wi Wok De Tok Airlines</title>
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

        /* Hero Mini */
        .hero-mini {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: white;
            padding: 40px 0;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .hero-mini::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            opacity: 0.3;
        }

        /* Card Styling */
        .booking-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 30px;
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 25px;
            position: relative;
        }

        .card-header-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
        }

        /* Flight Info */
        .flight-info-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 15px;
            padding: 25px;
            border-left: 4px solid var(--primary);
            margin-bottom: 25px;
        }

        .flight-route {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 0;
        }

        .airport {
            text-align: center;
            flex: 1;
        }

        .airport-name {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .airport-label {
            color: #6b7280;
            font-size: 0.9rem;
        }

        .flight-arrow {
            flex: 0 0 auto;
            margin: 0 20px;
        }

        .flight-arrow svg {
            width: 60px;
            height: 30px;
        }

        /* Form Styling */
        .form-control, .form-select {
            border-radius: 12px;
            padding: 12px 16px;
            border: 2px solid #e5e7eb;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(99, 102, 241, 0.25);
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        /* Price Display */
        .price-display {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            border: 2px dashed var(--primary);
        }

        .price-highlight {
            color: var(--primary);
            font-weight: 800;
            font-size: 2rem;
            margin: 10px 0;
        }

        .price-subtext {
            color: #6b7280;
            font-size: 0.9rem;
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 15px 30px;
            border-radius: 12px;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .btn-gradient:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.4);
            color: white;
        }

        .btn-outline-custom {
            border: 2px solid var(--primary);
            color: var(--primary);
            font-weight: 600;
            padding: 12px 25px;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.85rem;
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 30px 0;
            margin-top: 80px;
        }

        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Alert Styling */
        .alert-custom {
            border-radius: 15px;
            border: none;
            padding: 20px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .flight-route {
                flex-direction: column;
                text-align: center;
                padding: 15px 0;
            }

            .flight-arrow {
                margin: 15px 0;
                transform: rotate(90deg);
            }

            .airport-name {
                font-size: 1.2rem;
            }

            .price-highlight {
                font-size: 1.5rem;
            }

            .btn-gradient {
                padding: 12px 20px;
                font-size: 1rem;
            }
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
                        <a href="/dashboard" class="nav-link">
                            <i class="fas fa-home me-2"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/penerbangan" class="nav-link">
                            <i class="fas fa-plane me-2"></i>Penerbangan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pemesanan" class="nav-link active">
                            <i class="fas fa-ticket-alt me-2"></i>Pemesanan Saya
                        </a>
                    </li>
                    <li class="nav-item ms-3">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-logout" style="background: rgba(255, 255, 255, 0.2); border: 2px solid rgba(255, 255, 255, 0.4); color: white; font-weight: 600; padding: 8px 20px; border-radius: 8px; transition: all 0.3s ease;">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Mini -->
    <section class="hero-mini text-center">
        <div class="container">
            <h2>
                <i class="fas fa-shopping-cart me-3"></i>
                Pesan Tiket Penerbangan
            </h2>
            <p>
                <i class="fas fa-credit-card me-2"></i>
                Lengkapi data penumpang untuk memesan tiket
            </p>
        </div>
    </section>

    <div class="container mb-5">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/penerbangan" class="text-decoration-none">Penerbangan</a></li>
                <li class="breadcrumb-item active">Pesan Tiket</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                @if(isset($penerbangan))
                <!-- Booking Card -->
                <div class="booking-card fade-in-up">
                    <div class="card-header-custom">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="mb-2">
                                    <i class="fas fa-ticket-alt me-2"></i>
                                    Form Pemesanan Tiket
                                </h4>
                                <p class="mb-0 opacity-90">Lengkapi data penumpang dengan benar</p>
                            </div>
                            <div class="col-auto">
                                <span class="badge-gradient">
                                    <i class="fas fa-plane me-2"></i>{{ $penerbangan->kode_penerbangan }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-4">
                        <!-- Flight Information -->
                        <div class="flight-info-card fade-in-up">
                            <h5 class="fw-bold mb-3">
                                <i class="fas fa-info-circle me-2 text-primary"></i>
                                Detail Penerbangan
                            </h5>
                            
                            <!-- Flight Route -->
                            <div class="flight-route">
                                <div class="airport">
                                    <div class="airport-name">{{ $penerbangan->asal }}</div>
                                    <div class="airport-label">Bandara Keberangkatan</div>
                                </div>
                                
                                <div class="flight-arrow">
                                    <svg viewBox="0 0 60 30" fill="none">
                                        <path d="M5 15H55M55 15L45 10M55 15L45 20" stroke="#6366f1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                
                                <div class="airport">
                                    <div class="airport-name">{{ $penerbangan->tujuan }}</div>
                                    <div class="airport-label">Bandara Tujuan</div>
                                </div>
                            </div>

                            <!-- Flight Details -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <i class="fas fa-barcode me-2 text-primary"></i>
                                        <strong>Kode Penerbangan:</strong> {{ $penerbangan->kode_penerbangan }}
                                    </div>
                                    <div class="mb-2">
                                        <i class="fas fa-clock me-2 text-primary"></i>
                                        <strong>Waktu Keberangkatan:</strong> 
                                        {{ \Carbon\Carbon::parse($penerbangan->waktu_keberangkatan)->format('d F Y, H:i') }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-2">
                                        <i class="fas fa-tag me-2 text-primary"></i>
                                        <strong>Harga per Tiket:</strong> 
                                        <span class="text-primary fw-bold">Rp {{ number_format($penerbangan->harga, 0, ',', '.') }}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Booking Form -->
                        <form method="POST" action="{{ route('pemesanan.store') }}" class="fade-in-up" style="animation-delay: 0.1s;">
                            @csrf
                            <input type="hidden" name="penerbangan_id" value="{{ $penerbangan->id }}">

                            <h5 class="fw-bold mb-4">
                                <i class="fas fa-user me-2 text-primary"></i>
                                Data Penumpang
                            </h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">
                                            <i class="fas fa-user-circle me-2"></i>Nama Lengkap Penumpang
                                        </label>
                                        <input type="text" class="form-control" name="nama_penumpang" 
                                               placeholder="Masukkan nama lengkap penumpang" required>
                                        <div class="form-text">Harap masukkan nama sesuai KTP/Paspor</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">
                                            <i class="fas fa-phone me-2"></i>Nomor Telepon
                                        </label>
                                        <input type="text" class="form-control" name="no_hp" 
                                               placeholder="08xxxxxxxxxx" required>
                                        <div class="form-text">Nomor yang dapat dihubungi</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">
                                            <i class="fas fa-ticket me-2"></i>Jumlah Tiket
                                        </label>
                                        <input type="number" class="form-control" id="jumlah_tiket" 
                                               name="jumlah_tiket" min="1" max="10" value="1" required>
                                        <div class="form-text">Maksimal 10 tiket per pemesanan</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label">
                                            <i class="fas fa-calculator me-2"></i>Total Pembayaran
                                        </label>
                                        <div class="price-display">
                                            <div class="price-highlight" id="total_harga_display">
                                                Rp {{ number_format($penerbangan->harga, 0, ',', '.') }}
                                            </div>
                                            <p class="price-subtext mb-0">
                                                <i class="fas fa-check-circle me-1 text-success"></i>
                                                Termasuk pajak dan biaya layanan
                                            </p>
                                        </div>
                                        <input type="hidden" id="harga_per_tiket" value="{{ $penerbangan->harga }}">
                                        <input type="hidden" name="total_harga" id="total_harga" value="{{ $penerbangan->harga }}">
                                    </div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <a href="javascript:history.back()" class="btn btn-outline-custom w-100">
                                        <i class="fas fa-arrow-left me-2"></i>
                                        Kembali
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-gradient w-100">
                                        <i class="fas fa-shopping-cart me-2"></i>
                                        Konfirmasi & Bayar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <!-- Error State -->
                <div class="booking-card fade-in-up">
                    <div class="card-body text-center p-5">
                        <div class="alert alert-warning alert-custom">
                            <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                            <h5 class="fw-bold">Data Penerbangan Tidak Ditemukan</h5>
                            <p class="mb-3">Silakan pilih penerbangan terlebih dahulu untuk melakukan pemesanan.</p>
                            <a href="/penerbangan" class="btn btn-gradient">
                                <i class="fas fa-plane me-2"></i>
                                Pilih Penerbangan
                            </a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Footer -->
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
        // Hitung total harga otomatis
        const jumlahTiket = document.getElementById('jumlah_tiket');
        const totalHargaDisplay = document.getElementById('total_harga_display');
        const totalHargaInput = document.getElementById('total_harga');
        const hargaPerTiket = document.getElementById('harga_per_tiket').value;

        function hitungTotalHarga() {
            const jumlah = parseInt(jumlahTiket.value) || 1;
            const total = hargaPerTiket * jumlah;
            totalHargaDisplay.textContent = 'Rp ' + total.toLocaleString('id-ID');
            totalHargaInput.value = total;
        }

        jumlahTiket.addEventListener('input', hitungTotalHarga);
        
        // Hitung saat halaman pertama kali dimuat
        hitungTotalHarga();

        // Validasi form
        const form = document.querySelector('form');
        form.addEventListener('submit', function(e) {
            const nama = document.querySelector('input[name="nama_penumpang"]').value.trim();
            const noHp = document.querySelector('input[name="no_hp"]').value.trim();
            
            if (!nama) {
                e.preventDefault();
                showAlert('Harap masukkan nama lengkap penumpang!', 'warning');
                return;
            }
            
            if (!noHp) {
                e.preventDefault();
                showAlert('Harap masukkan nomor telepon yang valid!', 'warning');
                return;
            }

            // Validasi format nomor HP
            const noHpPattern = /^08[0-9]{9,11}$/;
            if (!noHpPattern.test(noHp)) {
                e.preventDefault();
                showAlert('Format nomor telepon tidak valid! Harus diawali 08 dan 10-12 digit.', 'warning');
                return;
            }
        });

        function showAlert(message, type) {
            // Create alert element
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show alert-custom`;
            alertDiv.innerHTML = `
                <i class="fas fa-${type === 'warning' ? 'exclamation-triangle' : 'info-circle'} me-2"></i>
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            
            // Insert before form
            form.parentNode.insertBefore(alertDiv, form);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.remove();
                }
            }, 5000);
        }

        // Input validation styling
        const inputs = document.querySelectorAll('input[required]');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() === '') {
                    this.classList.add('is-invalid');
                } else {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                }
            });
        });
    </script>
</body>
</html>