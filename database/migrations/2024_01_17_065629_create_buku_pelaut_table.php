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
        Schema::create('buku_pelaut', function (Blueprint $table) {
            $table->string('no_buku_pelaut', 50)->primary();
            $table->string('user_id', 50);
            $table->integer('kd_pelaut');
            $table->string('no_pendaftaran', 50);
            $table->string('nama', 50);
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('warna_rambut', 20);
            $table->string('warna_mata', 20);
            $table->string('warna_kulit', 20);
            $table->smallInteger('tinggi_badan');
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O']);
            $table->string('foto');
            $table->string('sertif_keahlian');
            $table->string('sertif_keterampilan');
            $table->string('ktp');
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
        Schema::dropIfExists('buku_pelaut');
    }
};
