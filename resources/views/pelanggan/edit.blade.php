<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
</head>
<body>

    <h1>Edit Pelanggan</h1>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ $pelanggan->nama }}"><br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="{{ $pelanggan->email }}"><br><br>

        <label>No Telepon</label><br>
        <input type="text" name="no_telepon" value="{{ $pelanggan->no_telepon }}"><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat">{{ $pelanggan->alamat }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('pelanggan.index') }}">Kembali</a>

</body>
</html>