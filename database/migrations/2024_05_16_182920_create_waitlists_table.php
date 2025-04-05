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
        Schema::create('waitlists', function (Blueprint $table) {
            $table->id();
           
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('noofperson');
            $table->string('date');
            $table->string('time');
            $table->string('phone');
            $table->boolean('withfoodornot')->default(0);

            $table->string('paymenttype');
            $table->boolean('approve')->default(0);;
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('waitlists');
    }
};