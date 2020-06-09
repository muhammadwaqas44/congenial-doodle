<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('schedule_id')->unsigned()->nullable();
            $table->foreign(['schedule_id'])->references('id')->on('schedules')->onDelete('cascade');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign(['category_id'])->references('id')->on('categories')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign(['user_id'])->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('visit_number')->nullable();
            $table->dateTime('visit_date')->nullable();
            $table->string('send_summary')->nullable();
            $table->text('notes')->nullable();
            $table->string('type')->nullable();
            $table->integer('status')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('schedule_categories');
    }
}
