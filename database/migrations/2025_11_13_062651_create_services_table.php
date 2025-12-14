<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama layanan
            $table->enum('type', ['reguler', 'eksklusif']); // Tambahan kolom jenis layanan
            $table->text('description')->nullable();
            $table->boolean('can_choose_time')->default(false); // True hanya untuk eksklusif
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};