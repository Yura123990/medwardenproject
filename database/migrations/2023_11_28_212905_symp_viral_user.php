<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SympViralUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('symp_viral_user');
        Schema::create('symp_viral_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('illness_id');
            $table->timestamp('created_at')->useCurrent();
            $table->float('simp1');
            $table->float('simp2');
            $table->float('simp3');
            $table->float('simp4');
            $table->float('simp5');
            $table->float('simp6');
            $table->float('simp7');
            $table->float('simp8');
            $table->float('simp9');
            $table->float('simp10');
            $table->float('simp11');
            $table->float('simp12');
            $table->float('simp13');
            $table->float('simp14');
            $table->float('simp15');
            $table->float('simp16');
            $table->float('simp17');
            $table->float('simp18');
            $table->float('simp19');
            $table->float('simp20');
            $table->float('simp21');
            $table->float('simp22');
            $table->float('simp23');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
