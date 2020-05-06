<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
          #Auto-incrementing UNSIGNED BIGINT
          $table->bigIncrements('id');
            
          #Adds nullable created_at and updated_at TIMESTAMP
          $table->timestamps();
          
          #Name of Restaurant  VARCHAR
          $table->string('restaurant_name');
                      
          #Location or address of Restaurant VARCHAR
          $table->string('location', 100);
          
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
        Schema::dropIfExists('locations');
    }
}
