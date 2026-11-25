<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pelanggan</title>
</head>
<body>

    <h1>Detail Pelanggan</h1>

    <p><strong>Nama:</strong> {{ $pelanggan->nama }}</p>
    <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
    <p><strong>No Telepon:</strong> {{ $pelanggan->no_telepon }}</p>
    <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>

    <a href="{{ route('pelanggan.index') }}">Kembali</a>

</body>
</html>