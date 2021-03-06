<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedTanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_tanks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('feed_id');
            $table->foreign('feed_id')->references('id')->on('feeds')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('tank_id');
            $table->foreign('tank_id')->references('id')->on('tanks')->onUpdate('cascade')->onDelete('cascade');
            $table->string('quantity');
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
        Schema::dropIfExists('feed_tanks');
    }
}
