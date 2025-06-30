<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Admins;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Admins = Admins::all();
        return view('dashboard.data.dataadmin', compact('Admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.crudadmin.create', [
            "title" => "Data Admin",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Simpan data ke database
        Admins::create([
            'nama' => $request->input('nama'),
            'gender' => $request->input('gender'),
        ]);

        return redirect()->route('dashboard.admin.dataadmin')->with([
            'success' => 'Data Berhasil Disimpan!'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {   
        $Admins = Admins::findOrFail($id);
        return view('dashboard.crudadmin.edit', compact('Admins'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        $Admins = Admins::findOrFail($id);

        $Admins->update([
            'nama' => $request->input('nama'),
            'gender' => $request->input('gender'),
        ]);

        return redirect()->route('dashboard.admin.dataadmin')->with([
            'success' => 'Data Berhasil Disimpan!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $Admins = Admins::findOrFail($id);
        $Admins->delete();

        return redirect()->route('dashboard.admin.dataadmin')->with('success', 'Data berhasil di hapus!');
    }
}
