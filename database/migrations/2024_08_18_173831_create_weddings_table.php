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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id('wedding_id'); 
            $table->string('groom_name');
            $table->string('groom_father_name');
            $table->string('groom_mother_name');
            $table->string('bride_name');
            $table->string('bride_father_name');
            $table->string('bride_mother_name');
            $table->dateTime('ceremony_time');
            $table->string('ceremony_location');
            $table->json('ceremony_coordinates'); 
            $table->dateTime('reception_time');
            $table->string('reception_location');
            $table->json('reception_coordinates'); 
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weddings');
    }
};
