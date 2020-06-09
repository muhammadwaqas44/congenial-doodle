<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign(['brand_id'])->references('id')->on('hotel_brands')->onDelete('cascade');

            $table->bigInteger('sub_brand_id')->unsigned()->nullable();
            $table->foreign(['sub_brand_id'])->references('id')->on('sub_brands')->onDelete('cascade');

            $table->bigInteger('hotel_location_id')->unsigned()->nullable();
            $table->foreign(['hotel_location_id'])->references('id')->on('hotel_locations')->onDelete('cascade');
            $table->dateTime('date');

            $table->bigInteger('consultant_id')->unsigned()->nullable();
            $table->foreign(['consultant_id'])->references('id')->on('users')->onDelete('cascade');

            $table->bigInteger('company_id')->unsigned()->nullable();
            $table->foreign(['company_id'])->references('id')->on('companies')->onDelete('cascade');

            $table->bigInteger('editor_id')->unsigned()->nullable();
            $table->foreign(['editor_id'])->references('id')->on('users')->onDelete('cascade');

            $table->text('notes')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign(['user_id'])->references('id')->on('users')->onDelete('cascade');

            $table->dateTime('consultant_start_date')->nullable();
            $table->dateTime('editor_start_date')->nullable();
            $table->dateTime('editor_end_date')->nullable();


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
        Schema::dropIfExists('schedules');
    }
}
