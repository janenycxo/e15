<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuisinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuisines', function (Blueprint $table) {
            #Auto-incrementing UNSIGNED BIGINT
            $table->bigIncrements('id');
            
            #Adds nullable created_at and updated_at TIMESTAMP
            $table->timestamps()->nullable();
            
            #Name of Restaurant  VARCHAR
            $table->string('restaurant_name');
                        
            #Type of cuisine VARCHAR
            $table->string('cuisine', 100);
            
            #Type of meal VARCHAR
            $table->string('meal', 100);
                                            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuisines');
    }
}
