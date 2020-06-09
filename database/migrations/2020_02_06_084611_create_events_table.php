<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('to_id')->unsigned()->nullable();
            $table->foreign(['to_id'])->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign(['user_id'])->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('schedule_id')->unsigned()->nullable();
            $table->foreign(['schedule_id'])->references('id')->on('schedules')->onDelete('cascade');
            $table->string('type');
            $table->string('message');
            $table->boolean('read')->default(0);
            $table->boolean('client_read')->default(0);
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
        Schema::dropIfExists('events');
    }
}
