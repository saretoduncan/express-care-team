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
        Schema::create('user_provider', function (Blueprint $table) {
            $table->id();
            $table->date('home_name');
            $table->string("website")->nullable();
            $table->string("work_email");
            $table->string("phone_number");
            $table->string("state");
            $table->string("city");
            $table->string("zipcode");
            $table->string("street");
            $table->string("home_description", "1000");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_provider');
    }
};
