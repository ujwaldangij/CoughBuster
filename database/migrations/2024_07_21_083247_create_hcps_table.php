<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHcpsTable extends Migration
{
    public function up()
    {
        Schema::create('hcps', function (Blueprint $table) {
            $table->id();
            $table->string('dvc_code');
            $table->string('hcp_name');
            $table->string('qualification');
            $table->string('city');
            $table->string('hospital');
            $table->string('attempt')->nullable(); // Making 'attempt' column nullable
            $table->integer('correct')->nullable(); // Adding 'correct' column, nullable
            $table->integer('increase')->nullable(); 
            $table->integer('users')->nullable(); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hcps');
    }
}
