<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_brand');
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
        Schema::dropIfExists('sub_brands');
    }
}
