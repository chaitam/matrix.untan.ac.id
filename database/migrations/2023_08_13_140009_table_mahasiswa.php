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
        Schema::create('table_mahasiswa', function (Blueprint $table) {
            $table->string('nim', 12)->primary();
            $table->string('nama', 100);
            $table->string('foto_normal', 225);
            $table->string('foto_nonformal', 225);
            $table->string('hobi', 100);
            $table->date('ttl');
            $table->string('quotes', 225);


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_siswa');
    }
};
