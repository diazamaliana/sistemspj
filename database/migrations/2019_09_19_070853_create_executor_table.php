<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('head',100);
            $table->char('nip', 20);
            $table->integer('numSpeaker');
            $table->char('nameSpeaker', 100);
            $table->string('positionSpeaker');
            $table->string('topicSpeaker');
            $table->char('nameModerator', 100);
            $table->string('positionModerator');
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
        Schema::dropIfExists('executor');
    }
}
