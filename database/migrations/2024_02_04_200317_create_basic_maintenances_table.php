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
            $table->date('tanggal');
            $table->string('alat');
            $table->boolean('kondisi');
            $table->string('abnormalitas');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('basic_maintenances');
    }
};
