<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->foreignId('atelier_id')->nullable()->after('practice_slug')->constrained()->nullOnDelete();
            $table->foreignId('venue_id')->nullable()->after('atelier_id')->constrained()->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropConstrainedForeignId('atelier_id');
            $table->dropConstrainedForeignId('venue_id');
        });
    }
};
