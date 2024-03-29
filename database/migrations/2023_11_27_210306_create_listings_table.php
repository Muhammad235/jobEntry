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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()
            ->onDelete('cascade');
            $table->string('title');
            $table->string('tags');
            $table->string('company');
            $table->string('location');
            $table->string('website');
            $table->string('email');
            $table->longText('description');
            $table->integer('sallary_from');
            $table->integer('sallary_to');
            $table->enum('employment_type', ['Full Time', 'Part Time']); //fulltime, part time
            $table->string('logo'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
