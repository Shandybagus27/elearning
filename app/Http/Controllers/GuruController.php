<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Gurus;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Gurus::all(); // pakai huruf kecil
        return view('dashboard.data.dataguru', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.crudguru.create', [
            "title" => "Data Guru",
        ]);
    }
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $request->validate([
            'nip' => 'required|string|max:20|unique:guru,nip',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|unique:guru,email',
            'alamat' => 'required|string|max:255',
            'pendidikan' => 'required|string|max:100',
        ]);

        // Simpan data ke database
        Gurus::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,
        ]);

        return redirect()->route('dashboard.guru.dataguru')->with([
            'success' => 'Data guru berhasil disimpan!',
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $guru = Gurus::findOrFail($id);
        return view('dashboard.crudguru.edit', compact('guru'));
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nip' => 'required|string|max:50',
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:100',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|in:Laki-laki,Perempuan',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'alamat' => 'required|string',
            'pendidikan' => 'required|string|max:100',
        ]);

        $guru = Gurus::findOrFail($id);

        $guru->update([
            'nip' => $request->input('nip'),
            'nama' => $request->input('nama'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'gender' => $request->input('gender'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'pendidikan' => $request->input('pendidikan'),
        ]);

        return redirect()->route('dashboard.guru.dataguru')->with([
            'success' => 'Data Guru Berhasil Diperbarui!'
        ]);
    }
     /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $guru = Gurus::findOrFail($id);
        $guru->delete();

        return redirect()->route('dashboard.guru.dataguru')->with('success', 'Data berhasil di hapus!');
    }
}
