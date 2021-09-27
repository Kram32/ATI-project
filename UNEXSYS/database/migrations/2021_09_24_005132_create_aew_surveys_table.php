<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAewSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aew_surveys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger("aew_id")->nullable(false);
            $table->bigInteger("competency_id")->nullable(false);
            $table->tinyInteger("answer")->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aew_surveys');
    }
}
