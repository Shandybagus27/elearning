<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Siswa;
use App\Models\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all(); // pakai huruf kecil
        return view('dashboard.data.datasiswa', compact('siswa'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('dashboard.crudsiswa.create', compact('kelas'));
    }
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $request->validate([
            'nis' => 'required|string|max:20|unique:siswa,nis',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|unique:siswa,email',
            'nama_ortu' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        // Simpan data ke database
        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'nama_ortu' => $request->nama_ortu,
            'alamat' => $request->alamat,
            'phone_number' => $request->phone_number,
            'kelas_id' => $request->kelas_id,
        ]);

        return redirect()->route('dashboard.siswa.datasiswa')->with([
            'success' => 'Data siswa berhasil disimpan!',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
        return view('dashboard.crudsiswa.edit', compact('siswa', 'kelas'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nis' => 'required|string|max:50',
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'email' => 'required|email|max:255',
            'nama_ortu' => 'required|string|max:255',
            'alamat' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $siswa = Siswa::findOrFail($id);

        $siswa->update([
            'nis' => $request->input('nis'),
            'nama' => $request->input('nama'),
            'gender' => $request->input('gender'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'email' => $request->input('email'),
            'nama_ortu' => $request->input('nama_ortu'),
            'alamat' => $request->input('alamat'),
            'phone_number' => $request->input('phone_number'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->route('dashboard.siswa.datasiswa')->with([
            'success' => 'Data Siswa berhasil diperbarui!'
        ]);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('dashboard.siswa.datasiswa')->with('success', 'Data berhasil di hapus!');
    }
}
