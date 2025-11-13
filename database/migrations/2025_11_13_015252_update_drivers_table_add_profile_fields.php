<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('drivers', function (Blueprint $table) {
            if (!Schema::hasColumn('drivers', 'birth_place')) {
                $table->string('birth_place')->nullable()->after('phone');
            }
            if (!Schema::hasColumn('drivers', 'birth_date')) {
                $table->date('birth_date')->nullable()->after('birth_place');
            }
            if (!Schema::hasColumn('drivers', 'gender')) {
                $table->enum('gender', ['Laki-laki', 'Perempuan'])->nullable()->after('birth_date');
            }
            if (!Schema::hasColumn('drivers', 'address')) {
                $table->text('address')->nullable()->after('gender');
            }
            if (!Schema::hasColumn('drivers', 'medical_history')) {
                $table->text('medical_history')->nullable()->after('address');
            }
            if (!Schema::hasColumn('drivers', 'photo')) {
                $table->string('photo')->nullable()->default('drivers/default.png')->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('drivers', function (Blueprint $table) {
            $table->dropColumn(['birth_place', 'birth_date', 'gender', 'address', 'medical_history', 'photo']);
        });
    }
};