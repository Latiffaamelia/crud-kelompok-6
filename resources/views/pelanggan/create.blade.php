<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pelanggan</title>
</head>
<body>

    <h1>Tambah Pelanggan</h1>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <label>Nama</label><br>
        <input type="text" name="nama"><br><br>

        <label>Email</label><br>
        <input type="email" name="email"><br><br>

        <label>No Telepon</label><br>
        <input type="text" name="no_telepon"><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('pelanggan.index') }}">Kembali</a>

</body>
</html>