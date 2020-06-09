<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('hotel_locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id')->unsigned()->nullable();
            $table->foreign(['brand_id'])->references('id')->on('hotel_brands')->onDelete('cascade');
            $table->bigInteger('sub_brand_id')->unsigned()->nullable();
            $table->foreign(['sub_brand_id'])->references('id')->on('sub_brands')->onDelete('cascade');
            $table->bigInteger('company_id')->unsigned()->nullable();
            $table->foreign(['company_id'])->references('id')->on('companies')->onDelete('cascade');
            $table->string('location_name');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('zip');
            $table->text('notes')->nullable();
            $table->string('region');
            $table->string('type');
            $table->string('star_rating');
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
        Schema::dropIfExists('hotel_locations');
    }
}
