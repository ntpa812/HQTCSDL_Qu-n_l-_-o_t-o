<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('giangviens', function (Blueprint $table) {
            $table->string('maGV', 10)->primary();
            $table->string('maNganh', 10);
            $table->string('hoTen', 50);
            $table->date('ngaySinh');
            $table->char('gioiTinh', 1);
            $table->string('diaChi', 100);
            $table->string('email', 100);
            $table->string('tenDN', 50);
            $table->string('matKhau', 100);
            $table->string('soCCCD', 12);
            $table->string('hocHam', 50);
            $table->string('hocVi', 50);
            $table->string('trangThai', 1);
            $table->foreign('maNganh')->references('maNganh')->on('nganhs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('giangviens');
    }
};
