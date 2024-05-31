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
        Schema::create('user_caregiver', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_birth');
            $table->string("gender");
            $table->string("phone_number");
            $table->string("state");
            $table->string("city");
            $table->string("zipcode");
            $table->string("street");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_caregiver');
    }
};
