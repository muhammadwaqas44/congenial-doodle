<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToCompanies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->bigInteger('brand_id')->unsigned()->nullable()->after('title');
            $table->foreign(['brand_id'])->references('id')->on('hotel_brands')->onDelete('cascade');
            $table->bigInteger('sub_brand_id')->unsigned()->nullable()->after('brand_id');
            $table->foreign(['sub_brand_id'])->references('id')->on('sub_brands')->onDelete('cascade');
            $table->bigInteger('hotel_location_id')->unsigned()->nullable()->after('sub_brand_id');
            $table->foreign(['hotel_location_id'])->references('id')->on('hotel_locations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('brand_id');
            $table->dropColumn('sub_brand_id');
            $table->dropColumn('hotel_location_id');
        });
    }
}
