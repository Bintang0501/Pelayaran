<?php

namespace App\Http\Controllers\SuperAdmin;

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

            return view('admin.penyijilan.index', $data);
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = PenyijilanMustering::where('id', $id)->first();

            return view('admin.penyijilan.detail', $data);
        });
    }

    public function unduh_foto($id)
    {
        return DB::transaction(function() use ($id) {
            $file = PenyijilanMustering::where('id', $id)->first(); 

            return response()->download("storage/" . $file['buku']['foto']);
        });
    }

    public function unduh_sertif_keahlian($id)
    {
        return DB::transaction(function() use ($id) {
            $file = PenyijilanMustering::where('id', $id)->first(); 

            return response()->download("storage/" . $file['buku']['sertif_keahlian']);
        });
    }

    public function unduh_sertif_keterampilan($id)
    {
        return DB::transaction(function() use ($id) {
            $file = PenyijilanMustering::where('id', $id)->first(); 

            return response()->download("storage/" . $file['buku']['sertif_keterampilan']);
        });
    }

    public function unduh_ktp($id)
    {
        return DB::transaction(function() use ($id) {
            $file = PenyijilanMustering::where('id', $id)->first(); 

            return response()->download("storage/" . $file['buku']['ktp']);
        });
    }

    public function update(Request $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            PenyijilanMustering::where('id',$id)->update([
                'surat_balasan' => $request['status_naik'],
                'is_validasi' => Auth::user()->id
            ]);

            return redirect('/super_admin/penyijilan');
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
