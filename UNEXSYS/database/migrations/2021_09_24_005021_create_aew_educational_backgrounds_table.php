<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAewEducationalBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aew_educational_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger("aew_id")->nullable(false);
            $table->integer("educational_attainment_id")->nullable(false);
            $table->string("course", 255)->nullable(false);
            $table->string("specialization", 255)->nullable(false);
            $table->string("school_name", 255)->nullable(false);
            $table->string("school_address", 300)->nullable(false);
            $table->year("year_graduated")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aew_educational_backgrounds');
    }
}
