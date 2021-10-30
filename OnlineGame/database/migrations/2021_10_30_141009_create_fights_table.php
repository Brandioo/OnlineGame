<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hero1_id');
            $table->unsignedBigInteger('hero2_id');
            $table->integer('winner');
            $table->unsignedBigInteger('user1_id');
            $table->unsignedBigInteger('user2_id');

            $table->softDeletes();

            $table->timestamps();

            $table->foreign('hero1_id')->references('id')->on('heros');
            $table->foreign('hero2_id')->references('id')->on('heros');
            $table->foreign('user1_id')->references('id')->on('users');
            $table->foreign('user2_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fights');
    }
}
