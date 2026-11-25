
<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'email' => 'required|email|unique:pelanggans,email',
            'tanggal_daftar' => 'required|date',
            'alamat' => 'required',
            'keterangan' => 'nullable',
        ]);

        $kode = 'PLG' . str_pad(
            (Pelanggan::max('id') ?? 0) + 1,
            3,
            '0',
            STR_PAD_LEFT
        );

        Pelanggan::create([
            'kode_pelanggan' => $kode,
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'email' => $request->email,
            'tanggal_daftar' => $request->tanggal_daftar,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('pelanggan.index');
    }

    public function show(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'email' => 'required|email|unique:pelanggans,email,' . $id,
            'tanggal_daftar' => 'required|date',
            'alamat' => 'required',
            'keterangan' => 'nullable',
        ]);

        $pelanggan->update([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'email' => $request->email,
            'tanggal_daftar' => $request->tanggal_daftar,
            'alamat' => $request->alamat,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('pelanggan.index');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index');
    }
}
