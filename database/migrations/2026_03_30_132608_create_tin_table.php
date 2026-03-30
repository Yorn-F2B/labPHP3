<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tin', function (Blueprint $table) {
            $table->increments('idTin');
            $table->string('tieuDe', 200);
            $table->text('tomTat')->nullable();
            $table->string('urlHinh', 200)->nullable();
            $table->integer('idLT')->default(0);
            $table->timestamps(); // created_at và updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tin');
    }
};
