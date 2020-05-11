<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConnectRestaurantsAndLocationsTable extends Migration
{
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {

           
            $table->bigInteger('restaurant_id')->unsigned()->nullable();

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
        });
    }

    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {

            
            $table->dropForeign('restaurants_location_id_foreign');

            $table->dropColumn('location');
        });
    }
}