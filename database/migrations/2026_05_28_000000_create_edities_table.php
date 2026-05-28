<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('edities', function (Blueprint $table) {
            $table->id();
            $table->string('project_slug')->index();          // 'mariage' (no Project model yet)
            $table->string('slug')->unique();                 // 'brussel-2024'
            $table->string('stad');
            $table->smallInteger('jaar');
            $table->string('stadgenoot')->nullable();         // 'Brusselaars'
            $table->string('periode')->nullable();            // 'maart – mei 2024'
            $table->date('starts_at');
            $table->date('ends_at')->nullable();
            $table->string('partner')->nullable();
            $table->text('locaties')->nullable();
            $table->string('groep_size')->nullable();
            $table->string('groep_age')->nullable();
            $table->text('groep_prose_intro')->nullable();
            $table->text('quote')->nullable();
            $table->string('quote_attr')->nullable();
            $table->boolean('inschrijving_open')->default(false);   // D-1 manual toggle
            $table->date('inschrijving_closes_at')->nullable();     // D-1 auto-close safety
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('edities');
    }
};
