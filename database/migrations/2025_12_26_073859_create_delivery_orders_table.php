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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id');
            $table->integer('driver_id');
            $table->integer('vechile_id');
            $table->integer('schedule_id');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->string('pickup_point');
            $table->string('destination');
            $table->enum('status', ['prepared', 'ongoing', 'completed', 'canceled'])->default('prepared');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
