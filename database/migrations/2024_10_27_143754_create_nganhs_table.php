<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nganhs', function (Blueprint $table) {
            $table->string('maNganh', 10)->primary();
            $table->string('maKhoa', 10);
            $table->string('tenNganh', 50);
            $table->string('trangThai', 1);
            $table->foreign('maKhoa')->references('maKhoa')->on('khoas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nganhs');
    }
};
