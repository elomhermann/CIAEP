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
        Schema::create('Members', function (Blueprint $table) {
            $table->uuidPrimary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_names');
            $table->string('sex');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('country_of_origin');
            $table->string('occupation');
            $table->string('phone_number');
            $table->string('email');
            $table->string('whatsapp_number');
            $table->date('date_joined_church');
            $table->date('born_again_date');
            $table->date('baptism_date');
            $table->string('username')->unique();
            $table->string('password_hash');
            $table->dateTime('last_login');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Members');
    }
};
