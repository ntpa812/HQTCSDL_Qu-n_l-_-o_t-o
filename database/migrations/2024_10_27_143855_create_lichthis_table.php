<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lichthis', function (Blueprint $table) {
            $table->string('maLT', 10)->primary();
            $table->string('maMH', 10);
            $table->string('maGV', 10);
            $table->string('caThi', 10);
            $table->string('phongThi', 50);
            $table->string('trangThai', 1);
            $table->foreign('maMH')->references('maMH')->on('monhocs');
            $table->foreign('maGV')->references('maGV')->on('giangviens');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lichthis');
    }
};
