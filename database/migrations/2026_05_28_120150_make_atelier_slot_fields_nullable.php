<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('ateliers', function (Blueprint $table) {
            $table->unsignedTinyInteger('day_of_week')->nullable()->change();
            $table->string('start_time')->nullable()->change();
            $table->string('end_time')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('ateliers', function (Blueprint $table) {
            $table->unsignedTinyInteger('day_of_week')->nullable(false)->change();
            $table->string('start_time')->nullable(false)->change();
            $table->string('end_time')->nullable(false)->change();
        });
    }
};
