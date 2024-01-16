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
}
