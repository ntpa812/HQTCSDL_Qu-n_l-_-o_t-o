<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lichthisinhviens', function (Blueprint $table) {
            $table->string('maLHP', 10);
            $table->string('maSV', 10);
            $table->string('maPT', 10);
            $table->primary(['maLHP', 'maSV']);
            $table->foreign('maLHP')->references('maLHP')->on('lophocphans');
            $table->foreign('maSV')->references('maSV')->on('sinhviens');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lichthisinhviens');
    }
};
