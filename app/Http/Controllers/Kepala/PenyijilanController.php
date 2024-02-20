<?php

namespace App\Http\Controllers\Kepala;

use App\Http\Controllers\Controller;
use App\Models\PenyijilanMustering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PenyijilanController extends Controller
{
    public function index()
    {
        return DB::transaction(function () {
            $data['penyijilan'] = PenyijilanMustering::get();

            return view('kepala.penyijilan.index', $data);
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = PenyijilanMustering::where('id', $id)->first();

            return view('kepala.penyijilan.detail', $data);
        });
    }

    public function unduh_ijazah($id)
    {
        return DB::transaction(function() use ($id) {
            $file = PenyijilanMustering::where('id', $id)->first(); 

            return response()->download("storage/" . $file['ijazah']);
        });
    }

    public function unduh_ttd($id)
    {
        return DB::transaction(function() use ($id) {
            $file = PenyijilanMustering::where('id', $id)->first(); 

            return response()->download("storage/" . $file['ttd_pejabat_naik']);
        });
    }

    public function update(Request $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            PenyijilanMustering::where('id',$id)->update([
                'status_naik' => $request['status_naik'],
                'user_validasi_id' => Auth::user()->id
            ]);

            return redirect('/kepala/penyijilan');
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
