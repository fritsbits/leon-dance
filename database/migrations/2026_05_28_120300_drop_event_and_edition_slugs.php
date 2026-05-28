<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropIndex(['practice_slug']);
            $table->dropIndex(['project_slug']);
            $table->dropIndex(['editie_slug']);
            $table->dropColumn(['practice_slug', 'project_slug', 'editie_slug']);
        });
        Schema::table('editions', function (Blueprint $table) {
            $table->dropIndex('edities_project_slug_index');
            $table->dropColumn('project_slug');
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('project_slug')->nullable();
            $table->string('editie_slug')->nullable();
            $table->string('practice_slug')->nullable();
        });
        Schema::table('editions', function (Blueprint $table) {
            $table->string('project_slug')->nullable();
        });
    }
};
