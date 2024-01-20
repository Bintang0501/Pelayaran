<?php

namespace App\Http\Controllers;

use App\Models\BukuPelaut;
use App\Models\PenyijilanMustering;
use App\Models\PermohonanSuratKetMasaBerlayar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function dashboard_admin()  
    {
        $data = [
            'buku_pelaut' => BukuPelaut::count(),
            'permohonan' => PermohonanSuratKetMasaBerlayar::count(),
            'penyijilan' => PenyijilanMustering::count(),
            'user' => User::count()
        ];

        return view('admin.dashboard', $data);    
    }
    
    public function dashboard_petugas()  
    {
        return view('petugas.dashboard');    
    }

    public function dashboard_kepala()  
    {
        return view('kepala.dashboard');    
    }

    public function dashboard_warga()  
    {
        $data = [
            'buku_pelaut' => BukuPelaut::where('user_id', Auth::user()->id)->count(),
            'ditolak' => PermohonanSuratKetMasaBerlayar::where('user_id', Auth::user()->id)->where('status', "2")->count(),
            'diterima' => PermohonanSuratKetMasaBerlayar::where('user_id', Auth::user()->id)->where('status', "3")->count(),
            'penyijilan' => PenyijilanMustering::where('user_id', Auth::user()->id)->where('status_naik', '3')->count()
        ];

        return view('warga.dashboard', $data);    
    }

}
