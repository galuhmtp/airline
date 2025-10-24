<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Tiket - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .tiket-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            overflow: hidden;
            max-width: 800px;
            margin: 0 auto;
        }
        .tiket-header {
            background: linear-gradient(45deg, #0d6efd, #1e90ff);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .tiket-body {
            padding: 30px;
        }
        .flight-route {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px 0;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
        }
        .route-info {
            text-align: center;
        }
        .route-arrow {
            font-size: 24px;
            color: #0d6efd;
            font-weight: bold;
        }
        .detail-row {
            border-bottom: 1px solid #e9ecef;
            padding: 10px 0;
        }
        .barcode {
            text-align: center;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            font-family: 'Courier New', monospace;
            font-weight: bold;
            letter-spacing: 3px;
        }
        .print-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }
        @media print {
            body {
                background: white !important;
                padding: 0 !important;
            }
            .print-btn {
                display: none !important;
            }
            .tiket-card {
                box-shadow: none !important;
                margin: 0 !important;
            }
        }
    </style>
</head>
<body>
    <div class="tiket-card">
        <!-- Header -->
        <div class="tiket-header">
            <h1 class="mb-1">E-TIKET PENERBANGAN</h1>
            <p class="mb-0">Wi Wok De Tok Airlines</p>
        </div>

        <!-- Body -->
        <div class="tiket-body">
            <!-- Kode Booking -->
            <div class="row mb-4">
                <div class="col">
                    <h4 class="text-primary">Kode Booking: <strong>{{ $pemesanan->kode_booking }}</strong></h4>
                    <p class="text-muted mb-0">Status: 
                        <span class="badge bg-success">{{ strtoupper($pemesanan->status) }}</span>
                    </p>
                </div>
                <div class="col text-end">
                    <p class="mb-1"><strong>Tanggal Pemesanan:</strong></p>
                    <p class="mb-0">{{ \Carbon\Carbon::parse($pemesanan->created_at)->format('d F Y H:i') }}</p>
                </div>
            </div>

            <!-- Rute Penerbangan -->
            <div class="flight-route">
                <div class="route-info">
                    <h3>{{ $pemesanan->penerbangan->asal }}</h3>
                    <p class="text-muted mb-0">Bandara Keberangkatan</p>
                </div>
                <div class="route-arrow">
                    ⮕
                </div>
                <div class="route-info">
                    <h3>{{ $pemesanan->penerbangan->tujuan }}</h3>
                    <p class="text-muted mb-0">Bandara Tujuan</p>
                </div>
            </div>

            <!-- Detail Penerbangan -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5>Detail Penerbangan</h5>
                    <div class="detail-row">
                        <strong>Kode Penerbangan:</strong> {{ $pemesanan->penerbangan->kode_penerbangan }}
                    </div>
                    <div class="detail-row">
                        <strong>Maskapai:</strong> Wi Wok De Tok Airlines
                    </div>
                    <div class="detail-row">
                        <strong>Waktu Keberangkatan:</strong> 
                        {{ \Carbon\Carbon::parse($pemesanan->penerbangan->waktu_keberangkatan)->format('d F Y H:i') }}
                    </div>
                    <div class="detail-row">
                        <strong>Kelas:</strong> Economy
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Detail Penumpang</h5>
                    <div class="detail-row">
                        <strong>Nama Penumpang:</strong> {{ $pemesanan->nama_penumpang }}
                    </div>
                    <div class="detail-row">
                        <strong>No. HP:</strong> {{ $pemesanan->no_hp }}
                    </div>
                    <div class="detail-row">
                        <strong>Jumlah Tiket:</strong> {{ $pemesanan->jumlah_tiket }} tiket
                    </div>
                    <div class="detail-row">
                        <strong>Total Harga:</strong> Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}
                    </div>
                </div>
            </div>

            <!-- Barcode (Simple Version) -->
            <div class="barcode mb-4">
                <div>{{ $pemesanan->kode_booking }}</div>
                <small class="text-muted">Scan kode ini di bandara</small>
            </div>

            <!-- Informasi Penting -->
            <div class="alert alert-info">
                <h6>Informasi Penting:</h6>
                <ul class="mb-0">
                    <li>Check-in dibuka 2 jam sebelum keberangkatan</li>
                    <li>Boarding gate ditutup 30 menit sebelum keberangkatan</li>
                    <li>Bawa dokumen identitas asli (KTP/Passpor)</li>
                    <li>Tunjukkan e-tiket ini di check-in counter</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Tombol Print -->
    <button onclick="window.print()" class="btn btn-primary print-btn">
        🖨️ Cetak Tiket
    </button>

    <!-- Tombol Kembali -->
    <div class="text-center mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali ke Daftar Pemesanan</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Auto print jika diinginkan
        // window.onload = function() {
        //     window.print();
        // };
    </script>
</body>
</html>