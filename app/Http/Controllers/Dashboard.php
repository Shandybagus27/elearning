<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Gurus;
use App\Models\Siswa;
use App\Models\Admins;

class Dashboard extends Controller
{
    public function dashboard()
    {
        $adminsCount = Admins::count(); // Menghitung jumlah admin
        $siswaCount = Siswa::count(); // Menghitung jumlah siswa
        $guruCount = Gurus::count(); // Menghitung jumlah guru
        return view('dashboard.admin', compact('adminsCount', 'siswaCount', 'guruCount')); 
    }
}
