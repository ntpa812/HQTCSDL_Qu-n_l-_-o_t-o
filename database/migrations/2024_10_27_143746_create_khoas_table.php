<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('khoas', function (Blueprint $table) {
            $table->string('maKhoa', 10)->primary();
            $table->string('tenKhoa', 50);
            $table->string('trangThai', 1);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('khoas');
    }
};
