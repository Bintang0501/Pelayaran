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
        return DB::transaction(function () {
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

            $buku_pelaut = BukuPelaut::create($request->all() + [
                "no_buku_pelaut" => Uuid::uuid4()->getHex(),
                "user_id" => Auth::user()->id,
            ]);

            $buku_pelaut["foto"] = $request->file("foto")->store("foto");
            $buku_pelaut["sertif_keahlian"] = $request->file("sertif_keahlian")->store("sertif_keahlian");
            $buku_pelaut["sertif_keterampilan"] = $request->file("sertif_keterampilan")->store("sertif_keterampilan");
            $buku_pelaut["ktp"] = $request->file("ktp")->store("ktp");
            $buku_pelaut->save();

            return redirect('/warga/buku_pelaut');
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return view('warga.buku_pelaut.detail', $data);
        });
    }
    
    public function file_foto($id)
    {
        return DB::transaction(function () use ($id) {
            $data = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return response()->download('storage/'.$data['foto']);
        });
    }

    public function file_sertif_keahlian($id)
    {
        return DB::transaction(function () use ($id) {
            $data = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return response()->download('storage/' . $data['sertif_keahlian']);
        });
    }

    public function file_sertif_keterampilan($id)
    {
        return DB::transaction(function () use ($id) {
            $data = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return response()->download('storage/' . $data['sertif_keahlian']);
        });
    }

    public function file_ktp($id)
    {
        return DB::transaction(function () use ($id) {
            $data = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return response()->download('storage/' . $data['ktp']);
        });
    }

}
