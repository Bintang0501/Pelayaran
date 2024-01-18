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
        Schema::create('permohonan_surat_keterangan_masa_berlayar', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('user_id', 50);
            $table->string('buku_pelaut_id', 50);
            $table->string('no_bukti_BNPB', 50);
            $table->string('file_persyaratan');
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
        Schema::dropIfExists('permohonan_surat_keterangan_masa_berlayar');
    }
};
