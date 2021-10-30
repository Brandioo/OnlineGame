<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHerosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kind_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->integer('strength');
            $table->integer('power');
            $table->float('health_points');
            $table->float('attack_points');
            $table->integer('performed_fights');
            $table->integer('items_possessed');
            $table->float('money_balance');
            $table->timestamps();

            $table->softDeletes();

            $table->foreign('kind_id')->references('id')->on('kinds');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heros');
    }
}
