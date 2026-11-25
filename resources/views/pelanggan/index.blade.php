
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
</head>
<body>

    <h1>Data Pelanggan</h1>

    <a href="{{ route('pelanggan.create') }}">Tambah Pelanggan</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Pelanggan</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Email</th>
                <th>Tanggal Daftar</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->kode_pelanggan }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->kategori }}</td>
                    <td>{{ $pelanggan->email }}</td>
                    <td>{{ $pelanggan->tanggal_daftar }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->keterangan }}</td>
                    <td>
                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}">Edit</a>

                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>

                        <a href="{{ route('pelanggan.show', $pelanggan->id) }}">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
