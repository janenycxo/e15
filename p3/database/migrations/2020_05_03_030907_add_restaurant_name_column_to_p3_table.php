<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRestaurantNameColumnToP3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('p3', function (Blueprint $table) {
            Schema::table('restaurants', function (Blueprint $table) {
                $table->integer('restaurant_name');
        });

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('p3', function (Blueprint $table) {
            Schema::dropIfExists('restaurants', function (Blueprint $table) {
                $table->dropColumn('restaurant_name');
        });
    });
    }
}
