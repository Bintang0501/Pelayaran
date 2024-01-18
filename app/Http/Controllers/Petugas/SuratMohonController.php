<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\PermohonanSuratKetMasaBerlayar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratMohonController extends Controller
{
    public function index()
    {
        return DB::transaction(function () {
            $data['surat_mohon'] = PermohonanSuratKetMasaBerlayar::get();

            return view('petugas.surat_mohon.index', $data);
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = PermohonanSuratKetMasaBerlayar::where('no_surat_mohon', $id)->first();

            return view('petugas.surat_mohon.detail', $data);
        });
    }

    public function update(Request $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            PermohonanSuratKetMasaBerlayar::where('id', $id)->update([
                'status' => $request['status'],
                'user_validasi_id' => Auth::user()->id
            ]);
            return redirect('/petugas/surat_mohon');
        });
    }
}
