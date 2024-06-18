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
        Schema::create('providers_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('work_type');
            $table->string('payment_period');
            $table->date('start_date');
            $table->date('end_date');
            $table->time('shift_start');
            $table->time('shift_end');
            $table->integer('people_needed');
            $table->integer('rate_per_hour');
            $table->string('role');
            $table->json('certificates_needed')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers_jobs');
    }
};
