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
        if(!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string('name');
                $table->string('last_name');
                $table->integer('dni');
                $table->dateTime('birth_date')->nullable();
                $table->string('email')->unique();
                $table->string('position_job');
                $table->string('phone', 20);
                $table->integer('department_id');
                $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
