<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\BukuPelaut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class BukuPelautController extends Controller
{
    public function index()
    {
        return DB::transaction(function(){
            $data['buku_pelaut'] = BukuPelaut::get();

            return view('warga.buku_pelaut.index', $data);
        });
    }

    public function create()
    {
        return view('warga.buku_pelaut.create');
    }

    public function store(Request $request)
    {
        return DB::transaction(function () use ($request) {
            User::create([
                'id' => Uuid::uuid4()->getHex(),
                'nama' => $request['nama'],
                'email' => $request['email'],
                'password' => bcrypt('admin123'),
                'created_by' => Auth::user()->id,
                'role' => $request['role'],
                'deskripsi' => $request['deskripsi']
            ]);
            return redirect('/super_admin/pengguna');
        });
    }
}
