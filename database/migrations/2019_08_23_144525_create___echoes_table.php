<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('__echoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id');
            $table->string('title');
            $table->string('type');
            $table->longText('result');
            $table->string('user');
            $table->string('attachment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('__echoes');
    }
}
