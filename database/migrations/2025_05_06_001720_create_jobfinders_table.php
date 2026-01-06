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
        Schema::create('job_finders', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('company')->nullable();
            $table->string('job_title')->nullable();
            $table->text('notes')->nullable();
            $table->string('location')->nullable();
            $table->string('age')->nullable();
            $table->string('salary')->nullable();
            $table->string('job_type')->nullable();
            $table->text('map_url')->nullable();
            $table->text('contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobfinders');
    }
};
