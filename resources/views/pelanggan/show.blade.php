
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
</head>
<body>

    <h1>Detail Pelanggan</h1>

    <p><strong>ID:</strong> {{ $pelanggan->id }}</p>
    <p><strong>Kode Pelanggan:</strong> {{ $pelanggan->kode_pelanggan }}</p>
    <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
    <p><strong>Kategori:</strong> {{ $pelanggan->kategori }}</p>
    <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
    <p><strong>Tanggal Daftar:</strong> {{ $pelanggan->tanggal_daftar }}</p>
    <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>
    <p><strong>Keterangan:</strong> {{ $pelanggan->keterangan }}</p>

    <a href="{{ route('pelanggan.index') }}">Kembali</a>

</body>
</html>
