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
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->email }}</td>
                    <td>{{ $pelanggan->no_telepon }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>
                       <a href="{{ route('pelanggan.show', $pelanggan->id) }}">Detail</a> |

                       <a href="{{ route('pelanggan.edit', $pelanggan->id) }}">Edit</a>

                     <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}" method="POST">
                       @csrf
                         @method('DELETE')
                        <button type="submit">Hapus</button>
                     </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>