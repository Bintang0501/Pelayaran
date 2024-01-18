<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\BukuPelaut;
use App\Models\PermohonanSuratKetMasaBerlayar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class SuratMohonControler extends Controller
{
    public function index()
    {
        return DB::transaction(function(){
            $data['surat_mohon'] = PermohonanSuratKetMasaBerlayar::get();

            return view('warga.surat_mohon.index', $data);
        });
    }

    public function create()
    {
        return DB::transaction(function(){
            $data['buku_pelaut'] = BukuPelaut::get();

            return view('warga.surat_mohon.create', $data);
        });
    }

    public function store(Request $request)
    {
        return DB::transaction(function () use ($request) {

            if ($request['file_persyaratan'])
            {
                $data = $request->file('file_persyaratan')->store('file_persyaratan');
            }

            PermohonanSuratKetMasaBerlayar::create([
                'id' => Uuid::uuid4()->getHex(),
                'user_id' => Auth::user()->id,
                'kd_pelaut' => $request['kd_pelaut'],
                'no_bukti_pnbp' => $request['no_bukti_pnbp'],
                'file_persyaratan' => $request['file_persyaratan']
            ]);
            return redirect('/warga/surat_mohon');
        });
    }

    public function show($id)
    {
        return DB::transaction(function() use ($id) {
            $data['detail'] = PermohonanSuratKetMasaBerlayar::where('id', $id)->first();

            return view('warga.surat_mohon.detail', $data);
        });
    }

    public function file_surat_balasan($id)
    {
        return DB::transaction(function() use ($id) {
            $data = PermohonanSuratKetMasaBerlayar::where('id', $id)->first();

            return response()->download('storage/'.$data['surat_balasan']);
        });
    }
}
