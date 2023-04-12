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
        Schema::create('hires', function (Blueprint $table) {
            $table->id('id_hire');
            $table->string('hire_status');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_repairman');
            $table->date('hire_day');
            $table->time('hire_time');
            $table->foreign('id_client')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_repairman')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hires');
    }
};
