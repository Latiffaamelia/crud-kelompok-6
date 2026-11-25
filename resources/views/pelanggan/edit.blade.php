
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

        <label>Kode Pelanggan</label><br>
        <input type="text" value="{{ $pelanggan->kode_pelanggan }}" readonly><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ $pelanggan->nama }}" required><br><br>

        <label>Kategori</label><br>
        <select name="kategori" required>
            <option value="Reguler" {{ $pelanggan->kategori == 'Reguler' ? 'selected' : '' }}>Reguler</option>
            <option value="VIP" {{ $pelanggan->kategori == 'VIP' ? 'selected' : '' }}>VIP</option>
        </select><br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="{{ $pelanggan->email }}" required><br><br>

        <label>Tanggal Daftar</label><br>
        <input type="date" name="tanggal_daftar" value="{{ $pelanggan->tanggal_daftar }}" required><br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" required>{{ $pelanggan->alamat }}</textarea><br><br>

        <label>Keterangan</label><br>
        <textarea name="keterangan">{{ $pelanggan->keterangan }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('pelanggan.index') }}">Kembali</a>

</body>
</html>
