<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengunjung', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pengunjung');
            $table->integer('jumlah_order');
            $table->integer('jumlah_konsultasi');
            $table->timestamps();
        });

        DB::table('pengunjung')->insert([
            'jumlah_pengunjung' => 0,
            'jumlah_order' => 0,
            'jumlah_konsultasi' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengunjung');
    }
};
