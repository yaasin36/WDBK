<?php

namespace App\Http\Controllers;

use App\Models\DaftarPoliklinik;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PasienController extends Controller
{
    // Dashboard untuk pasien
    public function dashboard(Request $request)
    {
        $pasien = $request->session()->get('data');
        if (!$pasien || $request->session()->get('role') !== 'pasien') {
            return Redirect::to('/pasien/login')->withErrors(['message' => 'Harap login terlebih dahulu.']);
        }

        $antrian_list = DaftarPoliklinik::where('id_pasien', $pasien->id)->get();
        return view('pasien.dashboard', compact('antrian_list'));
    }

    // Detail pasien
    public function detail(Request $request, $id)
    {
        $pasien = $request->session()->get('data');
        if (!$pasien || $request->session()->get('role') !== 'pasien') {
            return Redirect::to('/pasien/login')->withErrors(['message' => 'Harap login terlebih dahulu.']);
        }

        $data = DaftarPoliklinik::where('id', $id)
            ->where('id_pasien', $pasien->id)
            ->first();

        if (!$data) {
            return Redirect::to('/pasien/dashboard')->withErrors(['message' => 'Data tidak ditemukan.']);
        }

        return view('pasien.antrian.detail', compact('data'));
    }

    // Halaman login pasien
    public function getLogin()
    {
        return view('pasien.login');
    }

    // Halaman daftar pasien (untuk admin)
    public function index(Request $request)
    {
        $query = Pasien::query();

        if ($request->has('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('no_rm', 'like', '%' . $request->search . '%');
        }

        $pasien_list = $query->paginate(10);
        return view('admin.pasien.index', compact('pasien_list'));
    }

    // Halaman register pasien
    public function getRegister()
    {
        return view('pasien.register');
    }

    // Proses login pasien
    public function postLogin(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20|regex:/^[0-9]+$/',
        ]);

        $pasien = Pasien::where("nama", $request->nama)
            ->where('no_hp', $request->no_hp)
            ->first();

        if ($pasien) {
            $request->session()->put("role", "pasien");
            $request->session()->put("data", $pasien);
            return Redirect::to('/pasien');
        } else {
            return Redirect::back()->withErrors(['message' => 'Nama atau nomor HP tidak ditemukan.']);
        }
    }

    // Generate unique nomor rekam medis (No RM)
    private function handleNoRM(?Pasien $pasien)
    {
        if (!$pasien || !$pasien->no_rm) {
            $date = date("Ym");
            $number = sprintf("%03d", 1);
            return $date . "-" . $number;
        }

        $explode = explode("-", $pasien->no_rm);
        $number = intval($explode[1]) + 1;
        $number = sprintf("%03d", $number);
        $date = date("Ym");

        return $date . "-" . $number;
    }

    // Proses register pasien
    public function postRegister(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20|regex:/^[0-9]+$/',
            'alamat' => 'required|string|max:255',
        ]);

        $payload = $request->except('_token');

        // Generate unique no_rm
        do {
            $last_pasien = Pasien::orderBy('created_at', "DESC")->first();
            $payload['no_rm'] = $this->handleNoRM($last_pasien);
        } while (Pasien::where('no_rm', $payload['no_rm'])->exists());

        $pasien = Pasien::create($payload);

        if ($pasien) {
            $request->session()->put("role", "pasien");
            $request->session()->put("data", $pasien);
            return Redirect::to('/pasien')->with('success', 'Pendaftaran berhasil.');
        } else {
            return Redirect::back()->withErrors(['message' => 'Gagal mendaftarkan pasien. Silakan coba lagi.']);
        }
    }

    // Halaman form create pasien (admin)
    public function create()
    {
        return view('admin.pasien.create');
    }

    // Proses simpan data pasien baru (admin)
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20|regex:/^[0-9]+$/',
            'alamat' => 'required|string|max:255',
            'no_ktp' => 'required|string|max:16|regex:/^[0-9]+$/', // Validasi nomor KTP
        ]);

        // Generate unique no_rm
        do {
            $last_pasien = Pasien::orderBy('created_at', "DESC")->first();
            $no_rm = $this->handleNoRM($last_pasien);
        } while (Pasien::where('no_rm', $no_rm)->exists());

        Pasien::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'no_rm' => $no_rm,
            'no_ktp' => $request->no_ktp,
        ]);

        return redirect('/admin/pasien')->with('success', 'Pasien berhasil ditambahkan!');
    }

    // Halaman form edit pasien (admin)
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('admin.pasien.edit', compact('pasien'));
    }

    // Proses update data pasien (admin)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:20|regex:/^[0-9]+$/',
            'no_ktp' => 'required|string|max:16|regex:/^[0-9]+$/',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect('/admin/pasien')->with('success', 'Data pasien berhasil diperbarui!');
    }

    // Proses hapus data pasien (admin)
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect('/admin/pasien')->with('success', 'Data pasien berhasil dihapus!');
    }
}
