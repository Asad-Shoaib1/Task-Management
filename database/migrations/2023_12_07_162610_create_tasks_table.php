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
    
            Schema::create('tasks', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('taskname')->nullable(false);
                $table->string('Assignedto')->nullable(false);
                $table->date('Due_Date')->nullable(false); // Changed to 'Due_Date' without hyphen
                $table->string('category')->nullable(false);
                $table->string('description')->nullable();
                $table->string('checklist')->nullable();
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users'); // corrected 'references' method
            });
            


        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
