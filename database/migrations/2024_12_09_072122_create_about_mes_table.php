<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('aboutme', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->date('ttl'); // Tanggal Lahir
        $table->string('email')->unique();
        $table->string('no_telpon');
        $table->text('alamat');
        $table->string('pendidikan');
        $table->string('minat');
        $table->string('hobi');
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_mes');
    }
};
