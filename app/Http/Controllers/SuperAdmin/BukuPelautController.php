<?php

namespace App\Http\Controllers\SuperAdmin;

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

            return view('admin.buku_pelaut.index', $data);
        });
    }

    public function show($id)
    {
        return DB::transaction(function () use ($id) {
            $data['detail'] = BukuPelaut::where('no_buku_pelaut', $id)->first();

            return view('admin.buku_pelaut.detail', $data);
        });
    }

    public function update(Request $request, $id)
    {
        
        return DB::transaction(function () use ($request, $id) {
            if ($request->file('surat_balasan'))
            {
                $data = $request->file('surat_balasan')->store('surat_balasan');
            }

            BukuPelaut::where('no_buku_pelaut', $id)->update([
                'surat_balasan' => $data
            ]);
            return redirect('/super_admin/buku_pelaut');
        });

    }
}
