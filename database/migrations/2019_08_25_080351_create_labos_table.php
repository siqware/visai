<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id');
            $table->float('wbc');
            $table->float('rbc');
            $table->float('lym');
            $table->float('mid');
            $table->float('gran');
            $table->float('lym_perc');
            $table->float('mid_perc');
            $table->float('gran_perc');
            $table->float('hgb');
            $table->float('hct');
            $table->float('mcv');
            $table->float('mch');
            $table->float('mchc');
            $table->float('plt');
            $table->float('triglyceride');
            $table->float('cholesterol');
            $table->float('glucose');
            $table->float('calcium');
            $table->float('ac_urique');
            $table->float('creatinine');
            $table->float('magnesium');
            $table->float('sgot');
            $table->float('sgpt');

            $table->string('crp');
            $table->string('h_pylori');
            $table->string('hbsag');
            $table->string('hbsab');
            $table->string('hcv');

            $table->float('blood_pressure');
            $table->float('pulse');
            $table->float('heat');
            $table->float('sp_two');
            $table->string('user');
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
        Schema::dropIfExists('labos');
    }
}
