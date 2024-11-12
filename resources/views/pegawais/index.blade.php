<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <!-- Tambahkan CSS Bootstrap jika ingin styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">

        <h1 class="text-center mb-4">Daftar Pegawai</h1>

        <!-- Tampilkan data pegawai dalam tabel -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pegawais as $index => $pegawai)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->email }}</td>
                        <td>{{ $pegawai->no_telepon }}</td>
                        <td>{{ $pegawai->alamat }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Data pegawai tidak tersedia</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Tambahkan JavaScript Bootstrap jika dibutuhkan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
