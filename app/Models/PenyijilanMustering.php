<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenyijilanMustering extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'penyijilan_mustering';

    protected $guarded = [''];

    public $incrementing = false;

    protected $keyType = 'string';

    public $primaryKey = 'id';

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function buku()
    {
        return $this->belongsTo('App\Models\BukuPelaut', 'user_id', 'user_id');
    }
}
