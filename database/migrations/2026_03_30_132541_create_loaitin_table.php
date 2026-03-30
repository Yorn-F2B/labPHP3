<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->increments('idLT');
            $table->string('tenLT', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loaitin');
    }
};
