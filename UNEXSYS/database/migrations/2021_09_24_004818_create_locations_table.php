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
            $table->id();
            $table->timestamps();


            $table->text("code")->nullable(false);
            $table->string("name", 300)->nullable(false);
            $table->string("geo_lvl", 50)->nullable();
            $table->string("old_names", 300)->nullable();
            $table->string("city_class", 100)->nullable();
            $table->string("income_class", 100)->nullable();
            $table->string("urban_rural", 25)->nullable();
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
