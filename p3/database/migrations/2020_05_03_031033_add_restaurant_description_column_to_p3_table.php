<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRestaurantDescriptionColumnToP3Table extends Migration
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
                $table->integer('description');
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
                $table->dropColumn('description');
            });
        });
    }
}
