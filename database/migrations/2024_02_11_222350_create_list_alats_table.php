<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('list_alats', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_maintenance_id');
            $table->integer('alat_id');
            $table->boolean('kondisi');
            $table->string('abnormalitas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('list_alats');
    }
};
