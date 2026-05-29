<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('venues', function (Blueprint $table) {
            // Exterior photo of the building, so a first-time visitor recognises the door.
            // Stored on the public disk (storage/app/public/venues), set via Filament.
            $table->string('photo')->nullable()->after('lng');
            $table->string('photo_credit')->nullable()->after('photo');
        });
    }

    public function down(): void
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropColumn(['photo', 'photo_credit']);
        });
    }
};
