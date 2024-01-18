<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermohonanSuratKetMasaBerlayar extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'permohonan_surat_keterangan_masa_berlayar';

    protected $guarded = [''];

    public $incrementing = false;

    protected $keyType = 'string';

    public $primaryKey = 'id';

    public function buku_pelaut()
    {
        return $this->belongsTo('App\Models\BukuPelaut', 'buku_pelaut_id', 'no_buku_pelaut');
    }
}
