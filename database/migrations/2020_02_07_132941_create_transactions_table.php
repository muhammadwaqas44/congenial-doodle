<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('server_name')->nullable();
            $table->date('date')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('amount_paid')->nullable();
            $table->string('amount_check_number')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('coupon')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
