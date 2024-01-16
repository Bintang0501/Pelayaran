<?php

namespace App\Http\Controllers\Autentikasi;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('autentikasi.login');
    }

    public function post_login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" => $request->password])){
            $request->session()->regenerate();

            $cek = User::where('id', Auth::user()->id)->first();

            if($cek['role'] == 'admin'){
                return redirect('/super_admin/dashboard')->with('message', 'Berhasil Login');
            } elseif($cek['role'] == 'petugas'){
                return redirect('/petugas/dashboard')->with('message', 'Berhasil Login');
            } elseif($cek['role'] == 'kepala'){
                return redirect('/kepala/dashboard')->with('message', 'Berhasil Login');
            }elseif($cek['role'] == 'warga'){
                return redirect('/warga/dashboard')->with('message', 'Berhasil Login');
            }

        } else {
            return back();
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
