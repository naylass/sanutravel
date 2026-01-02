<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vechile_maintenances', function (Blueprint $table) {
            $table->id();
            $table->integer('vechile_id');
            $table->date('maintenance_date');
            $table->integer('odometer_km');
            $table->integer('next_maintenance_km');
            $table->text('description')->nullable();
            $table->enum('status', ['pending', 'completed'])->default('completed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vechile_maintenances');
    }
};
