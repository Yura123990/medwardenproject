<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SympViralDoctor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('symp_viral_doctor');
        Schema::create('symp_viral_doctor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('illness_id');
            $table->timestamp('created_at')->useCurrent();
            $table->float('simp1');
            $table->float('simp1_k')->default(0);
            $table->float('simp2');
            $table->float('simp2_k')->default(0);
            $table->float('simp3');
            $table->float('simp3_k')->default(0);
            $table->float('simp4');
            $table->float('simp4_k')->default(0);
            $table->float('simp5');
            $table->float('simp5_k')->default(0);
            $table->float('simp6');
            $table->float('simp6_k')->default(0);
            $table->float('simp7');
            $table->float('simp7_k')->default(0);
            $table->float('simp8');
            $table->float('simp8_k')->default(0);
            $table->float('simp9');
            $table->float('simp9_k')->default(0);
            $table->float('simp10');
            $table->float('simp10_k')->default(0);
            $table->float('simp11');
            $table->float('simp11_k')->default(0);
            $table->float('simp12');
            $table->float('simp12_k')->default(0);
            $table->float('simp13');
            $table->float('simp13_k')->default(0);
            $table->float('simp14');
            $table->float('simp14_k')->default(0);
            $table->float('simp15');
            $table->float('simp15_k')->default(0);
            $table->float('simp16');
            $table->float('simp16_k')->default(0);
            $table->float('simp17');
            $table->float('simp17_k')->default(0);
            $table->float('simp18');
            $table->float('simp18_k')->default(0);
            $table->float('simp19');
            $table->float('simp19_k')->default(0);
            $table->float('simp20');
            $table->float('simp20_k')->default(0);
            $table->float('simp21');
            $table->float('simp21_k')->default(0);
            $table->float('simp22');
            $table->float('simp22_k')->default(0);
            $table->float('simp23');
            $table->float('simp23_k')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symp_viral_doctor');
    }
}
