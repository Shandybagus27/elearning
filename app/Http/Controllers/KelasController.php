<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = Kelas::all(); // pakai huruf kecil
        return view('dashboard.data.datakelas', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.crudkelas.create', [
            "title" => "Data Kelas",
        ]);
    }
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_kelas' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Kelas::create([
            'nama_kelas' => $request->nama_kelas,
        ]);

        return redirect()->route('dashboard.kelas.datakelas')->with([
            'success' => 'Data kelas berhasil disimpan!',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

     /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
