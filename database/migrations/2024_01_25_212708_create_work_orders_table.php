<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('area_id');
            $table->integer('route_id');
            $table->string('pic');
            $table->date('tanggal');
            $table->integer('kode_alat');
            $table->string('abnormalitas');
            $table->string('action');
            $table->boolean('kondisi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('work_orders');
    }
};
