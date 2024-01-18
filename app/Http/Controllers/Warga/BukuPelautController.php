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

            if ($request['foto'] && $request['sertif_keahlian'] && $request['sertif_keterampilan'] && $request['ktp'])
            {
                $data = $request->file('foto')->store('foto');
                $data2 = $request->file('sertif_keahlian')->store('sertif_keahlian');
                $data3 = $request->file('sertif_keterampilan')->store('sertif_keterampilan');
                $data4 = $request->file('ktp')->store('ktp');
            }

            BukuPelaut::create([
                'no_buku_pelaut' => Uuid::uuid4()->getHex(),
                'user_id' => Auth::user()->id,
                'kd_pelaut' => $request['kd_pelaut'],
                'no_pendaftaran' => $request['no_pendaftaran'],
                'nama' => $request['nama'],
                'tempat' => $request['tempat'],
                'tgl_lahir' => $request['tgl_lahir'],
                'alamat' => $request['alamat'],
                'warna_rambut' => $request['warna_rambut'],
                'warna_mata' => $request['warna_mata'],
                'warna_kulit' => $request['warna_kulit'],
                'tinggi_badan' => $request['tinggi_badan'],
                'gol_darah' => $request['gol_darah'],
                'foto' => $data,
                'sertif_keahlian' => $data2,
                'sertif_keterampilan' => $data3,
                'ktp' => $data4
            ]);
            return redirect('/warga/buku_pelaut');
        });
    }

    public function show($id)
    {
        return DB::transaction(function() use ($id) {
            $data['detail'] = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return view('warga.buku_pelaut.detail', $data);
        });
    }

    public function file_surat_balasan($id)
    {
        return DB::transaction(function() use ($id) {
            $data = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return response()->download('storage/'.$data['surat_balasan']);
        });
    }
}
