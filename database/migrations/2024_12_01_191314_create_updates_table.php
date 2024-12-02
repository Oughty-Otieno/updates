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
        Schema::create('updates', function (Blueprint $table) {
          $table->id();
          $table->string('squad');
          $table->text('projects_deployed')->nullable();
          $table->text('projects_sit')->nullable();
          $table->text('projects_uat')->nullable();
          $table->text('incidents')->nullable();
          $table->text('other_updates')->nullable();
          $table->integer('week_number');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('updates');
    }
};
