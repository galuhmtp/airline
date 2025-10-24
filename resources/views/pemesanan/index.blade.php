<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Saya - Wi Wok De Tok Airlines</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="/">Wi Wok De Tok</a>
        </div>
    </nav>

    <div class="container py-5">
        <h2 class="fw-bold mb-4">Pemesanan Saya</h2>

        @if($pemesanans->count() > 0)
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-primary">
                        <tr>
                            <th>Kode Booking</th>
                            <th>Penerbangan</th>
                            <th>Penumpang</th>
                            <th>Jumlah Tiket</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemesanans as $pemesanan)
                        <tr>
                            <td>{{ $pemesanan->kode_booking }}</td>
                            <td>
                                {{ $pemesanan->penerbangan->kode_penerbangan }}<br>
                                <small>{{ $pemesanan->penerbangan->asal }} → {{ $pemesanan->penerbangan->tujuan }}</small>
                            </td>
                            <td>{{ $pemesanan->nama_penumpang }}</td>
                            <td>{{ $pemesanan->jumlah_tiket }}</td>
                            <td>Rp {{ number_format($pemesanan->total_harga, 0, ',', '.') }}</td>
                            <td>
                                <span class="badge bg-success">{{ ucfirst($pemesanan->status) }}</span>
                            </td>
                            <td>
                                <a href="{{ route('pemesanan.tiket', $pemesanan->id) }}" class="btn btn-sm btn-primary">
                                    Lihat Tiket
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="alert alert-info text-center">
                <h4>Belum ada pemesanan</h4>
                <p>Silakan pesan tiket penerbangan terlebih dahulu.</p>
                <a href="/penerbangan" class="btn btn-primary">Pesan Tiket</a>
            </div>
        @endif
    </div>
</body>
</html>