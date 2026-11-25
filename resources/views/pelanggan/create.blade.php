
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
        <input type="text" name="nama" required><br><br>

        <label>Kategori</label><br>
        <select name="kategori" required>
            <option value="">Pilih Kategori</option>
            <option value="Reguler">Reguler</option>
            <option value="VIP">VIP</option>
        </select><br><br>

        <label>Email</label><br>
        <input type="email" name="email" required><br><br>

        <label>Tanggal Daftar</label><br>
        <input type="date" name="tanggal_daftar" required><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label>Keterangan</label><br>
        <textarea name="keterangan"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('pelanggan.index') }}">Kembali</a>

</body>
</html>
