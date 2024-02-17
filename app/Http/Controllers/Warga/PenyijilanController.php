<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\PenyijilanMustering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class PenyijilanController extends Controller
{
    public function index()
    {
        return DB::transaction(function () {
            $data['penyijilan'] = PenyijilanMustering::get();

            return view('warga.penyijilan.index', $data);
        });
    }

    public function create()
    {
        return view('warga.penyijilan.create');
    }

    public function store(Request $request)
    {
        return DB::transaction(function () use ($request) {

            $penyijilan = PenyijilanMustering::create($request->all() + [
                "id" => Uuid::uuid4()->getHex(),
                "user_id" => Auth::user()->id,
            ]);

            $penyijilan["ijazah"] = $request->file("ijazah")->store("ijazah");
            $penyijilan["ttd_pejabat_naik"] = $request->file("ttd_pejabat_naik")->store("ttd_pejabat_naik");
            $penyijilan->save();

            return redirect('/warga/penyijilan');
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = PenyijilanMustering::where('id', $id)->first();

            return view('warga.penyijilan.detail', $data);
        });
    }

    public function update(Request $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            $penyijilan = PenyijilanMustering::where('id',$id)->update([
                'tempat_turun' => $request->tempat_turun,
                'tgl_turun' => $request->tgl_turun,
                'deskripsi' => $request->deskripsi,
            ]);

            $penyijilan["ttd_nahkoda"] = $request->file("ttd_nahkoda")->store("ttd_nahkoda");
            $penyijilan["ttd_pejabat_turun"] = $request->file("ttd_pejabat_turun")->store("ttd_pejabat_turun");
            $penyijilan->save();

            return redirect('/warga/penyijilan');
        });
    }

    public function file_surat_balasan($id)
    {
        return DB::transaction(function () use ($id) {
            $data = PenyijilanMustering::where('id', $id)->first();

            return response()->download('storage/' . $data['surat_balasan']);
        });
    }
}
