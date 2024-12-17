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
        Schema::create('individus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('metode_pembayaran')->nullable();
            $table->string('status_pembayaran')->nullable();
            $table->enum('status', ['baru', 'proses', 'sukses', 'batal'])->default('baru');

            // Kolom kendaraan
            $table->enum('kendaraan', ['roda_dua', 'roda_empat', 'bus'])->default('roda_dua');

            // Kolom untuk harga tiket jika diperlukan
            // Bisa dihilangkan jika hanya ingin perhitungan di model
            $table->decimal('harga_tiket', 10, 2)->default(15000);

            // Kolom untuk jumlah tiket dan total
            $table->decimal('jumlah_tiket', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->date('tanggal_kedatangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individus');
    }
};
