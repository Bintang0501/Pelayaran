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
        Schema::create('surat_keterangan_masa_berlayar', function (Blueprint $table) {
            $table->string('id', 50)->primary();
            $table->string('user_id');
            $table->string('buku_pelaut_id');
            $table->string('penyijilan_mustering_id');
            $table->string('ttd');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keterangan_masa_berlayar');
    }
};
