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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('first name of teacher');
            $table->string('last_name')->comment('last name of teacher');
            $table->string('email')->comment('email of teacher')->max(50);
            $table->string('department')->comment('department of teacher')->max(10);
            $table->datetime('birthday')->comment('birthday of teacher');
        });
    }   

/**
 * Reverse the migrations.
 */
    public function down(): void 
    {
        Schema::dropIfExists('teachers');
    }
};
