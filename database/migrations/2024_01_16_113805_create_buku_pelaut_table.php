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
            $table->string('id', 50)->primary();
            $table->string('no_buku_pelaut', 50);
            $table->integer('kd_pelaut');
            $table->string('no_pendaftaran', 50);
            $table->string('nama', 50);
            $table->string('tempat');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('warna_rambut', 20);
            $table->string('warna_mata', 20);
            $table->string('warna_kulit', 20);
            $table->ineteger('tinggi_badan', 10);
            $table->enum('gol_darah', ['A', 'B', 'AB', 'O']);
            $table->string('foto', 100);
            $table->string('sertif_keahlian', 100);
            $table->string('sertif_keterampilan', 100);
            $table->string('ktp', 100);
            $table->enum('status', [0, 1, 2])->default(0);
            $table->string('created_by', 50)->nullable();
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
