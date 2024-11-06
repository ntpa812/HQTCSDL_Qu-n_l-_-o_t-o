<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('danhsachsinhviens', function (Blueprint $table) {
            $table->string('maLHP', 10);
            $table->string('maSV', 10);
            $table->decimal('diemQT', 5, 2);
            $table->decimal('diemThi', 5, 2);
            $table->primary(['maLHP', 'maSV']);
            $table->foreign('maLHP')->references('maLHP')->on('lophocphans');
            $table->foreign('maSV')->references('maSV')->on('sinhviens');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('danhsachsinhviens');
    }
};
