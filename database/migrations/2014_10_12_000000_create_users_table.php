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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type')->default('user')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('streetaddress1')->nullable();
            $table->string('streetaddress2')->nullable();
            $table->string('country')->nullable();
            $table->string('companyname')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('alternatecontact')->nullable();
            $table->string('city')->nullable();
            $table->string('username')->nullable();
            $table->string('pincode')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
