<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::rename('edities', 'editions');
    }

    public function down(): void
    {
        Schema::rename('editions', 'edities');
    }
};
