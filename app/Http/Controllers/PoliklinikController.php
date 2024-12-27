<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Poliklinik;

class PoliklinikController extends Controller
{
    // Tampilkan daftar poliklinik
    public function index(Request $request)
    {
        $poliklinik_list = Poliklinik::paginate(25); // Pagination dengan 25 data per halaman
        return view('admin.poliklinik.index', compact('poliklinik_list'));
    }

    // Tampilkan form untuk menambah data poliklinik
    public function create()
    {
        return view('admin.poliklinik.create');
    }

    // Proses menyimpan data poliklinik baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_poli' => 'required|string|max:255', // Nama wajib diisi
            'keterangan' => 'nullable|string|max:500', // Keterangan maksimal 500 karakter
        ]);

        // Simpan data ke database
        Poliklinik::create($request->only('nama_poli', 'keterangan'));

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('admin.poliklinik.index')->with('success', 'Data poliklinik berhasil ditambahkan!');
    }


    // Tampilkan form untuk mengedit data poliklinik
    public function edit(Request $request, $id)
    {
        // Cari data poliklinik berdasarkan ID, jika tidak ditemukan akan menghasilkan 404
        $poliklinik = Poliklinik::findOrFail($id);
        return view('admin.poliklinik.edit', compact('poliklinik'));
    }

    // Proses memperbarui data poliklinik
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_poli' => 'required|string|max:255', // Nama poliklinik wajib diisi
            'keterangan' => 'nullable|string', // Keterangan boleh kosong
        ]);

        // Cari data poliklinik berdasarkan ID
        $poliklinik = Poliklinik::findOrFail($id);

        // Update data poliklinik
        $poliklinik->update([
            'nama_poli' => $request->nama_poli,
            'keterangan' => $request->keterangan,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect('/admin/poliklinik')->with('success', 'Data poliklinik berhasil diperbarui!');
    }

    // Proses menghapus data poliklinik
    public function destroy($id)
    {
        // Cari data poliklinik berdasarkan ID
        $poliklinik = Poliklinik::findOrFail($id);

        // Hapus data poliklinik
        $poliklinik->delete();

        // Redirect dengan pesan sukses
        return Redirect::to('/admin/poliklinik')->with('success', 'Data poliklinik berhasil dihapus!');
    }
}
