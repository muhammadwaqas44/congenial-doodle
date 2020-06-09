<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenericFormSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generic_form_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('question');
            $table->integer('possible_point');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign(['category_id'])->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('schedule_id')->unsigned()->nullable();
            $table->foreign(['schedule_id'])->references('id')->on('schedules')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign(['user_id'])->references('id')->on('users')->onDelete('cascade');
            $table->integer('status')->default(true);
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
        Schema::dropIfExists('generic_form_schedules');
    }
}
