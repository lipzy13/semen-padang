<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('basic_maintenances', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('area_id')->constrained();
            $table->foreignId('route_id')->constrained();
            $table->string('pic');
            $table->date('tanggal');
            $table->foreignId('alat_id')->constrained();
            $table->string('abnormalitas');
            $table->boolean('kondisi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('basic_maintenances');
    }
};
