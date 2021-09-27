<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAewEligibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aew_eligibilities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger("aew_id")->nullable(false);
            $table->integer("eligibility_license_id")->nullable(false);
            $table->year("year_acquired")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aew_eligibilities');
    }
}
