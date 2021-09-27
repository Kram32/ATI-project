<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAewCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aew_careers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger("aew_id")->nullable(false);
            $table->enum("scope", ["national", "regional", "provincial", "municipal", "city"])->nullable(false);
            $table->text("involvement")->nullable(false);
            $table->integer("bgy_covered")->nullable(false);
            $table->text("allocation")->nullable(false);
            $table->string("type_of_extension", 255)->nullable(false);   
            $table->integer("salary_grade")->nullable(false);   
            $table->integer("amount_equivalent")->nullable(false); 
            $table->year("year_started_in_service")->nullable(false);   
            $table->year("year_started_in_ext")->nullable(false); 
            $table->integer("educational_attainment_id")->nullable(false);
            $table->string("course", 255)->nullable(false);
            $table->string("specialization", 255)->nullable(false);
            $table->string("school_name", 255)->nullable(false);
            $table->string("school_address", 300)->nullable(false); 
            $table->year("year_graduated")->nullable(false);
            $table->integer("eligibility_id")->nullable(false);
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
        Schema::dropIfExists('aew_careers');
    }
}
