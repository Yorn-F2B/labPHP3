<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sinhvien', function (Blueprint $table) {
            $table->id();
            $table->string('masv', 20);
            $table->string('hoten', 100);
            $table->integer('tuoi');
            $table->string('ngaysinh', 20);
            $table->string('cmnd', 20);
            $table->string('email', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sinhvien');
    }
};
