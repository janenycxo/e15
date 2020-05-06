<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            #Auto-incrementing UNSIGNED BIGINT
            $table->bigIncrements('id');
            
            #TIMESTAMP
            $table->timestamps();
            
            #Name of Restaurant  VARCHAR
            $table->string('restaurant_name');
            
            #The year restaurant opened TINYINT
            $table->smallInteger('year_open');
                      
            #Location or address of Restaurant VARCHAR
            $table->string('location', 100);
            
            #Type of cuisine VARCHAR
            $table->string('cuisine', 100);
            
            #Type of meal VARCHAR
            $table->string('meal', 100);
           
            #Website of Restaurant VARCHAR
            $table->string('restaurant_url', 100)->nullable();
            
            #Brief description of Restaurant TEXT
            $table->text('description')->nullable();
            
            #User input or review of Restaurant/Dining experience  TEXT
            $table->text('review', 100);

            #User rating of overall visit  TEXT
            $table->tinyInteger('rating');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
