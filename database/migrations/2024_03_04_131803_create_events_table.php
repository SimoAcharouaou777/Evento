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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location');
            $table->integer('available_seats');
            $table->foreignId('category_id')->constrained('categories')->ondelete('cascade')->onUpdate('cascade');
            $table->foreignId('organizer_id')->constrained('users')->ondelete('cascade')->onUpdate('cascade');
            $table->enum('status',['pending','accepted','refused'])->default('pending');
            $table->enum('type',['auto','manual'])->default('auto');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
