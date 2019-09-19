<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameEvent1');
            $table->mediumtext('descEvent');
            $table->date('dateDoc');
            $table->year('yearDoc');
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
        Schema::dropIfExists('event1');
    }
}
