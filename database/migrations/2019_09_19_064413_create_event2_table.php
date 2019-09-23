<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nameEvent',100);
            $table->mediumtext('descEvent');
            $table->date('dateDoc');
            $table->longtext('bgDoc');
            $table->text('goalEvent');
            $table->text('fileDoc');
            $table->datetime('startDate');
            $table->datetime('endDate');
            $table->integer('participant');
            $table->longtext('note');
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
        Schema::dropIfExists('event2');
    }
}
