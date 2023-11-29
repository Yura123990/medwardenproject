<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SympViralRes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('symp_viral_res');
        Schema::create('symp_viral_res', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('illness_id');
            $table->double('res_symptom1');
            $table->double('res_symptom2');
            $table->double('res_symptom3');
            $table->double('res_symptom4');
            $table->double('res_symptom5');
            $table->double('res_symptom6');
            $table->double('res_symptom7');
            $table->double('res_symptom8');
            $table->double('res_symptom9');
            $table->double('res_symptom10');
            $table->double('res_symptom11');
            $table->double('res_symptom12');
            $table->double('res_symptom13');
            $table->double('res_symptom14');
            $table->double('res_symptom15');
            $table->double('res_symptom16');
            $table->double('res_symptom17');
            $table->double('res_symptom18');
            $table->double('res_symptom19');
            $table->double('res_symptom20');
            $table->double('res_symptom21');
            $table->double('res_symptom22');
            $table->double('res_symptom23');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symp_viral_res');
    }
}
