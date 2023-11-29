<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SympViralCharacteristic extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('symp_viral_characteristic');
        Schema::create('symp_viral_characteristic', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('illness_id');
            $table->float('avg_symptom1');
            $table->float('avg_symptom1_k');
            $table->float('avg_symptom2');
            $table->float('avg_symptom2_k');
            $table->float('avg_symptom3');
            $table->float('avg_symptom3_k');
            $table->float('avg_symptom4');
            $table->float('avg_symptom4_k');
            $table->float('avg_symptom5');
            $table->float('avg_symptom5_k');
            $table->float('avg_symptom6');
            $table->float('avg_symptom6_k');
            $table->float('avg_symptom7');
            $table->float('avg_symptom7_k');
            $table->float('avg_symptom8');
            $table->float('avg_symptom8_k');
            $table->float('avg_symptom9');
            $table->float('avg_symptom9_k');
            $table->float('avg_symptom10');
            $table->float('avg_symptom10_k');
            $table->float('avg_symptom11');
            $table->float('avg_symptom11_k');
            $table->float('avg_symptom12');
            $table->float('avg_symptom12_k');
            $table->float('avg_symptom13');
            $table->float('avg_symptom13_k');
            $table->float('avg_symptom14');
            $table->float('avg_symptom14_k');
            $table->float('avg_symptom15');
            $table->float('avg_symptom15_k');
            $table->float('avg_symptom16');
            $table->float('avg_symptom16_k');
            $table->float('avg_symptom17');
            $table->float('avg_symptom17_k');
            $table->float('avg_symptom18');
            $table->float('avg_symptom18_k');
            $table->float('avg_symptom19');
            $table->float('avg_symptom19_k');
            $table->float('avg_symptom20');
            $table->float('avg_symptom20_k');
            $table->float('avg_symptom21');
            $table->float('avg_symptom21_k');
            $table->float('avg_symptom22');
            $table->float('avg_symptom22_k');
            $table->float('avg_symptom23');
            $table->float('avg_symptom23_k');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symp_viral_characteristic');
    }
}
