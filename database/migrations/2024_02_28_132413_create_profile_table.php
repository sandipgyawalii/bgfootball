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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_title');
            $table->string('company_address');
            $table->string('company_description');
            $table->string('about_image');
            $table->string('logo');
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('map');
            $table->string('fb');
            $table->string('insta');
            $table->string('twitter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
