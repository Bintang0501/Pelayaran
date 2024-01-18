<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyijilan_mustering', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('user_id', 50);
            $table->string('kapal', 100);
            $table->string('jabatan', 50);
            $table->string('daerah_pelayaran', 20);
            $table->string('bendera', 50);
            $table->string('ijazah', 50);
            $table->string('tempat_naik', 50);
            $table->date('tgl_naik');
            $table->string('ttd_pejabat_naik');
            $table->string('tempat_turun');
            $table->date('tgl_turun');
            $table->string('alasan_turun');
            $table->string('ttd_nahkkoda');
            $table->string('ttd_pejabat_turun');
            $table->enum('status', [0, 1, 2, 3, 4, 5])->default(0);
            $table->text('komentar')->nullable();
            $table->string('surat_balasan')->nullable();
            $table->string('user_validasi_id', 100)->nullable();
            $table->tinyInteger('is_validasi')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyijilan_mustering');
    }
};
