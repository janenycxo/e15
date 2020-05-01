<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEateriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eateries', function (Blueprint $table) {
          # Create a Primary, Auto-Incrementing column named `id`
        $table->bigIncrements('id');

        # This generates two columns: `created_at` and `updated_at` 
        # Laravel will manage these columns automatically
        $table->timestamps();

        $table->string('restaurantname', 100);
        $table->string('state', 2);
        $table->smallInteger('address');
        $table->string('cuisine');
        $table->text('phone', 7);
        $table->mediumText('description');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eateries');
    }
}
