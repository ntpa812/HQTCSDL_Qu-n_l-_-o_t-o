<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monhocnganhs', function (Blueprint $table) {
            $table->string('maMH', 10);
            $table->string('maNganh', 10);
            $table->primary(['maMH', 'maNganh']);
            $table->foreign('maMH')->references('maMH')->on('monhocs');
            $table->foreign('maNganh')->references('maNganh')->on('nganhs');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monhocnganhs');
    }
};
