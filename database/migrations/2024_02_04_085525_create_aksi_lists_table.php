<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('aksi_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('basic_maintenance_id');
            $table->foreignId('aksi_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aksi_lists');
    }
};
