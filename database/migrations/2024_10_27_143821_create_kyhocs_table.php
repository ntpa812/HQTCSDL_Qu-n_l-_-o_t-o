<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kyhocs', function (Blueprint $table) {
            $table->string('maKH', 10)->primary();
            $table->integer('namHoc');
            $table->integer('kyHoc');
            $table->string('trangThai', 1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kyhocs');
    }
};
