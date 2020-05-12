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
            #Auto-incrementing 
            $table->id();
            
            #TIMESTAMP
            $table->timestamps(0);
            
            $table->string('slug');
            
            #Name of Restaurant  VARCHAR
            $table->string('name');
            
            #The year restaurant opened TINYINT
            $table->smallInteger('year_open');
                      
            #Location or address of Restaurant VARCHAR
            $table->string('location', 100);
             
            #County of Restaurant (Brooklyn/Queens/Manhattan/Bronx/Staten Island) VARCHAR
            $table->string('county');

            #Type of cuisine VARCHAR
            $table->string('cuisine', 100);
            
            #Type of meal VARCHAR
            $table->string('meal', 100);
           
            #Website of Restaurant VARCHAR
            $table->string('restaurant_url');
            
            #Brief description of Restaurant TEXT
            $table->text('description')->nullable();
            
            #User input or review of Restaurant/Dining experience  TEXT
            $table->text('review');

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
