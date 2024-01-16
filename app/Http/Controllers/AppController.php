<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function dashboard_admin()  
    {
        return view('admin.dashboard');    
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
        return view('warga.dashboard');    
    }

}
