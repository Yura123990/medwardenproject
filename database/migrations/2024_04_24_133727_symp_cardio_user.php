<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SympCardioUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('symp_cardio_user');
        Schema::create('symp_cardio_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('symp_cardio_user');
    }
}
