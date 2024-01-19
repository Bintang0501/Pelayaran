<?php

namespace App\Http\Controllers\SuperAdmin;

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

            return view('admin.surat_mohon.index', $data);
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = PermohonanSuratKetMasaBerlayar::where('id', $id)->first();

            return view('admin.surat_mohon.detail', $data);
        });
    }

    public function update(Request $request, $id)
    {
        return DB::transaction(function () use ($request, $id) {
            if ($request->file('surat_balasan'))
            {
                $data = $request->file('surat_balasan')->store('surat_balasan');
            }

            PermohonanSuratKetMasaBerlayar::where('id', $id)->update([
                'surat_balasan' => $data
            ]);
            return redirect('/super_admin/surat_mohon');
        });
    }
}
