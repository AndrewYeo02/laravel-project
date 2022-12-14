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
        Schema::create('logbooks', function (Blueprint $table) {
            $table->id();
           // $table->foreign('trainee_id')->references('id')->on('trainees')->onDelete('cascade');
           
            $table->unsignedBigInteger('trainee_id');
            $table->string('name');
            $table->timestamps();
            $table->foreign('trainee_id')->references('id')->on('trainees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logbooks');
    }
};
