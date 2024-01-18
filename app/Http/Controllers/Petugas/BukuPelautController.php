<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\BukuPelaut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BukuPelautController extends Controller
{
    public function index()
    {
        return DB::transaction(function () {
            $data['buku_pelaut'] = BukuPelaut::get();

            return view('petugas.buku_pelaut.index', $data);
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return view('petugas.buku_pelaut.detail', $data);
        });
    }

    public function update(Request $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            BukuPelaut::where('no_buku_pelaut', $id)->update([
                'status' => $request['status'],
                'user_validasi_id' => Auth::user()->id
            ]);
            return redirect('/petugas/buku_pelaut');
        });
    }
}
