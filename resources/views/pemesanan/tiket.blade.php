<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket - Wi Wok De Tok Airlines</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        /* Tiket Card */
        .tiket-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 900px;
            margin: 0 auto;
            position: relative;
        }

        .tiket-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .tiket-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
        }

        .tiket-body {
            padding: 40px;
        }

        /* Flight Route */
        .flight-route {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 40px 0;
            padding: 30px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 15px;
            border-left: 4px solid var(--primary);
        }

        .route-info {
            text-align: center;
            flex: 1;
        }

        .airport-name {
            font-size: 2rem;
            font-weight: 800;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .airport-label {
            color: #6b7280;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .route-arrow {
            flex: 0 0 auto;
            margin: 0 30px;
        }

        .route-arrow svg {
            width: 80px;
            height: 40px;
        }

        /* Detail Sections */
        .detail-section {
            margin-bottom: 30px;
        }

        .section-title {
            color: var(--primary);
            font-weight: 700;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f3f4f6;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #f3f4f6;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: #374151;
            min-width: 200px;
        }

        .detail-value {
            color: #6b7280;
            text-align: right;
        }

        .price-highlight {
            color: var(--primary);
            font-weight: 800;
            font-size: 1.2rem;
        }

        /* Barcode */
        .barcode-section {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            border: 2px dashed #cbd5e1;
            margin: 30px 0;
        }

        .barcode-text {
            font-family: 'Courier New', monospace;
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: 4px;
            color: #1e293b;
            margin-bottom: 10px;
        }

        /* Badges */
        .badge-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .status-badge {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        /* Alert Styling */
        .alert-custom {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border: none;
            border-radius: 15px;
            border-left: 4px solid var(--primary);
            padding: 25px;
        }

        /* Buttons */
        .btn-gradient {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 12px;
            transition: all 0.3s ease;
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

        .print-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        /* Footer */
        .footer-custom {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 25px 0;
            margin-top: 50px;
            border-radius: 0 0 20px 20px;
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

        /* Print Styles */
        @media print {
            body {
                background: white !important;
                padding: 0 !important;
            }
            .print-btn, .back-btn {
                display: none !important;
            }
            .tiket-card {
                box-shadow: none !important;
                margin: 0 !important;
                border-radius: 0 !important;
            }
            .footer-custom {
                margin-top: 0 !important;
                border-radius: 0 !important;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .tiket-body {
                padding: 25px;
            }
            
            .flight-route {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }
            
            .route-arrow {
                margin: 20px 0;
                transform: rotate(90deg);
            }
            
            .airport-name {
                font-size: 1.5rem;
            }
            
            .detail-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
            
            .detail-label {
                min-width: auto;
            }
            
            .detail-value {
                text-align: left;
            }
            
            .barcode-text {
                font-size: 1.2rem;
                letter-spacing: 2px;
            }
            
            .print-btn {
                bottom: 20px;
                right: 20px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="tiket-card fade-in-up">
        <!-- Header -->
        <div class="tiket-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="mb-2">
                        <i class="fas fa-ticket-alt me-3"></i>
                        E-TIKET PENERBANGAN
                    </h1>
                    <p class="mb-0 opacity-90">
                        <i class="fas fa-plane me-2"></i>
                        Wi Wok De Tok Airlines
                    </p>
                </div>
                <div class="col-auto">
                    <span class="status-badge">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ strtoupper($pemesanan->status) }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Body -->
        <div class="tiket-body">
            <!-- Booking Info -->
            <div class="row mb-4">
                <div class="col-md-8">
                    <span class="badge-gradient">
                        <i class="fas fa-barcode me-2"></i>
                        Kode Booking: {{ $pemesanan->kode_booking }}
                    </span>
                </div>
                <div class="col-md-4 text-md-end">
                    <p class="mb-1">
                        <i class="fas fa-calendar me-2 text-primary"></i>
                        <strong>Tanggal Pemesanan:</strong>
                    </p>
                    <p class="mb-0 text-muted">
                        {{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d F Y, H:i') }}
                    </p>
                </div>
            </div>

            <!-- Flight Route -->
            <div class="flight-route fade-in-up" style="animation-delay: 0.1s;">
                <div class="route-info">
                    <div class="airport-name">{{ $pemesanan->penerbangan->asal }}</div>
                    <div class="airport-label">Bandara Keberangkatan</div>
                </div>
                
                <div class="route-arrow">
                    <svg viewBox="0 0 80 40" fill="none">
                        <path d="M5 20H75M75 20L65 15M75 20L65 25" stroke="#6366f1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <div class="route-info">
                    <div class="airport-name">{{ $pemesanan->penerbangan->tujuan }}</div>
                    <div class="airport-label">Bandara Tujuan</div>
                </div>
            </div>

            <div class="row">
                <!-- Detail Penerbangan -->
                <div class="col-lg-6">
                    <div class="detail-section fade-in-up" style="animation-delay: 0.2s;">
                        <h5 class="section-title">
                            <i class="fas fa-plane me-2"></i>
                            Detail Penerbangan
                        </h5>
                        <div class="detail-row">
                            <span class="detail-label">Kode Penerbangan</span>
                            <span class="detail-value">{{ $pemesanan->penerbangan->kode_penerbangan }}</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Maskapai</span>
                            <span class="detail-value">Wi Wok De Tok Airlines</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Waktu Keberangkatan</span>
                            <span class="detail-value">
                                {{ \Carbon\Carbon::parse($pemesanan->penerbangan->waktu_keberangkatan)->format('d F Y') }}<br>
                                <small class="text-primary">
                                    {{ \Carbon\Carbon::parse($pemesanan->penerbangan->waktu_keberangkatan)->format('H:i') }} WIB
                                </small>
                            </span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Kelas</span>
                            <span class="detail-value">Economy</span>
                        </div>
                    </div>
                </div>

                <!-- Detail Penumpang -->
                <div class="col-lg-6">
                    <div class="detail-section fade-in-up" style="animation-delay: 0.3s;">
                        <h5 class="section-title">
                            <i class="fas fa-user me-2"></i>
                            Detail Penumpang
                        </h5>
                        <div class="detail-row">
                            <span class="detail-label">Nama Penumpang</span>
                            <span class="detail-value">{{ $pemesanan->nama_penumpang }}</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Nomor Telepon</span>
                            <span class="detail-value">{{ $pemesanan->no_hp }}</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Jumlah Tiket</span>
                            <span class="detail-value">{{ $pemesanan->jumlah_tiket }} tiket</span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label">Total Harga</span>
                            <span class="detail-value price-highlight">
                                Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Barcode Section -->
            <div class="barcode-section fade-in-up" style="animation-delay: 0.4s;">
                <div class="barcode-text">{{ $pemesanan->kode_booking }}</div>
                <p class="text-muted mb-0">
                    <i class="fas fa-qrcode me-2"></i>
                    Scan kode ini di bandara untuk check-in
                </p>
            </div>

            <!-- Important Information -->
            <div class="alert alert-custom fade-in-up" style="animation-delay: 0.5s;">
                <h6 class="fw-bold mb-3">
                    <i class="fas fa-info-circle me-2 text-primary"></i>
                    Informasi Penting
                </h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <small>Check-in dibuka 2 jam sebelum keberangkatan</small>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <small>Boarding gate ditutup 30 menit sebelum keberangkatan</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <small>Bawa dokumen identitas asli (KTP/Passpor)</small>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <small>Tunjukkan e-tiket ini di check-in counter</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer-custom text-center">
            <p class="mb-0">
                <i class="fas fa-plane me-2"></i>
                &copy; 2025 Wi Wok De Tok Airlines. Semua hak dilindungi.
            </p>
        </div>
    </div>

    <!-- Action Buttons -->
    <button onclick="window.print()" class="btn btn-gradient print-btn">
        <i class="fas fa-print me-2"></i>
        Cetak Tiket
    </button>

    <div class="text-center mt-4 back-btn">
        <a href="{{ route('pemesanan.index') }}" class="btn btn-outline-custom">
            <i class="fas fa-arrow-left me-2"></i>
            Kembali ke Daftar Pemesanan
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto print jika diinginkan (opsional)
        // window.onload = function() {
        //     setTimeout(() => {
        //         window.print();
        //     }, 1000);
        // };

        // Add some interactive effects
        document.addEventListener('DOMContentLoaded', function() {
            const tiketCard = document.querySelector('.tiket-card');
            
            // Add hover effect
            tiketCard.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            tiketCard.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });

            // Add click to copy booking code
            const barcode = document.querySelector('.barcode-text');
            if (barcode) {
                barcode.style.cursor = 'pointer';
                barcode.title = 'Klik untuk menyalin kode booking';
                
                barcode.addEventListener('click', function() {
                    const textArea = document.createElement('textarea');
                    textArea.value = this.textContent;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    
                    // Show copied message
                    const originalText = this.textContent;
                    this.textContent = '✓ Disalin!';
                    this.style.color = '#10b981';
                    
                    setTimeout(() => {
                        this.textContent = originalText;
                        this.style.color = '';
                    }, 2000);
                });
            }
        });
    </script>
</body>
</html>