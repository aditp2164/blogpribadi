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
        Schema::create('my_projeks', function (Blueprint $table) {
            $table->id();
            $table->string('judul_projek');  // Judul proyek
            $table->text('deskripsi');      // Deskripsi proyek
            $table->string('gambar')->nullable(); // Nama file gambar
            $table->timestamps();           // Timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_projeks');
    }
};
