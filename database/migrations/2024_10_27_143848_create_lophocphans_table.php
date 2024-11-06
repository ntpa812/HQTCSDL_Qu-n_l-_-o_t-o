<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lophocphans', function (Blueprint $table) {
            $table->string('maLHP', 10)->primary();
            $table->string('maKH', 10);
            $table->string('maMH', 10);
            $table->string('maGV', 10);
            $table->string('tenLop', 50);
            $table->string('phongHoc', 50);
            $table->time('gioHoc');
            $table->string('trangThai', 1);
            $table->foreign('maKH')->references('maKH')->on('kyhocs');
            $table->foreign('maMH')->references('maMH')->on('monhocs');
            $table->foreign('maGV')->references('maGV')->on('giangviens');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lophocphans');
    }
};
