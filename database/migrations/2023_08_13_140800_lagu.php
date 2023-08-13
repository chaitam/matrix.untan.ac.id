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
        Schema::create('table_lagu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_audio', 225);
            $table->string('lirik', 225);
            $table->string('pencipta', 225);
            $table->date('tahun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_lagu');
    }
};
