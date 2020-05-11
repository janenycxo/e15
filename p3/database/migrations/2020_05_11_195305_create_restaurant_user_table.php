<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantUserTable extends Migration
{
    
    public function up()
    {
        Schema::create('restaurant_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->bigInteger('restaurant_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
            $table->foreign('user_id')->references('id')->on('users');

            $table->text('review')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('restaurant_user');
    }
}
