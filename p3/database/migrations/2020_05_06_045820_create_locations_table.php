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
          $table->id();
            
          #Adds nullable created_at and updated_at TIMESTAMP
          $table->timestamps();
          
          #Name of Restaurant  VARCHAR
          $table->string('name');
                      
          #Address of Restaurant VARCHAR
          $table->string('location', 100);
          
          #County of Restaurant (Brooklyn/Queens/Manhattan/Bronx/Staten Island) VARCHAR
          $table->string('borough', 100);

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
