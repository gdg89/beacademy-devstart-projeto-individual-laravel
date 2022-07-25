<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout',function(Blueprint $table){
            $table->id();
            $table->string('exercise');
            $table->integer('sets')->nullable();
            $table->integer('reps')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('rest')->nullable();
            $table->string('obs')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });

        Schema::create('workout_user', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_email')->constrained('users')->onDelete('CASCADE')->upDate('CASCADE');
            $table->foreignId('workout_id')->constrained('workout')->onDelete('CASCADE')->upDate('CASCADE');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('workout');
        Schema::dropIfExist('workout_user');
    }
    
};
