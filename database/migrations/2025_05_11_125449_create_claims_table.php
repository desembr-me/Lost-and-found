<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('report_id')->constrained('reports')->onDelete('cascade');
            $table->text('deskripsi_klaim');
            $table->enum('status',['pending','disetujui','ditolak'])->default('pending');
            $table->timestamps();
            $table->softDeletes();
        });
        // $table->unique(['user_id', 'report_id']); // Mencegah klaim ganda
    }

    public function down(): void
    {
        Schema::dropIfExists('claims');
    }
};
