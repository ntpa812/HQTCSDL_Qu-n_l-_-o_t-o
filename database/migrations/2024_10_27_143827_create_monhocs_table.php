<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monhocs', function (Blueprint $table) {
            $table->string('maMH', 10)->primary();
            $table->string('tenMH', 50);
            $table->string('maNganh', 10);
            $table->string('trangThai', 1);
            $table->integer('soTC');
            $table->text('moTa');
            $table->string('deCuong', 1);
            $table->foreign('maNganh')->references('maNganh')->on('nganhs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monhocs');
    }
};
