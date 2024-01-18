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
        return DB::transaction(function () {

            $cek_buku_pelaut = BukuPelaut::where("user_id", Auth::user()->id)->first();

            if (empty($cek_buku_pelaut)) {
                return redirect("/warga/buku_pelaut")
                    ->with("error", "Data Buku Pelaut Anda Tidak Ditemukan. Silahkan Buat Terlebih Dahulu");
            }

            $data['surat_mohon'] = PermohonanSuratKetMasaBerlayar::where("user_id", Auth::user()->id)
                ->first();

            return view('warga.surat_mohon.index', $data);
        });
    }

    public function create()
    {
        return DB::transaction(function () {
            $data['buku_pelaut'] = BukuPelaut::where("user_id", Auth::user()->id)->first();

            return view('warga.surat_mohon.create', $data);
        });
    }

    public function store(Request $request)
    {
        return DB::transaction(function () use ($request) {

            $permohonan = PermohonanSuratKetMasaBerlayar::create($request->all() + [
                "id" => Uuid::uuid4()->getHex(),
                "user_id" => Auth::user()->id,
                "buku_pelaut_id" => $request->no_buku_pelaut
            ]);

            $permohonan["file_persyaratan"] = $request->file("file_persyaratan")->store("file_persyaratan");
            $permohonan->save();

            return redirect('/warga/surat_mohon');
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = PermohonanSuratKetMasaBerlayar::where('id', $id)->first();

            return view('warga.surat_mohon.detail', $data);
        });
    }

    public function file_surat_balasan($id)
    {
        return DB::transaction(function () use ($id) {
            $data = PermohonanSuratKetMasaBerlayar::where('id', $id)->first();

            return response()->download('storage/' . $data['surat_balasan']);
        });
    }
}
