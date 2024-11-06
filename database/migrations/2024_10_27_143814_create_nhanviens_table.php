<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->string('maNV', 10)->primary();
            $table->string('hoTen', 50);
            $table->date('ngaySinh');
            $table->string('diaChi', 100);
            $table->char('gioiTinh', 1);
            $table->string('sdt', 15);
            $table->string('soCCCD', 12);
            $table->string('anhThe', 50);
            $table->string('donVi', 50);
            $table->string('trangThai', 1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nhanviens');
    }
};
