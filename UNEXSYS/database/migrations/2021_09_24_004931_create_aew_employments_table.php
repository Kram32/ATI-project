<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAewEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aew_employments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger("aew_id")->nullable(false);
            $table->string("office_name", 350)->nullable(false);
            $table->integer("office_type_id")->nullable(false);
            $table->integer("reg_code")->nullable(false);
            $table->integer("prov_dist_code")->nullable(false);
            $table->integer("city_mun_code")->nullable(false);
            $table->integer("bgy_code")->nullable(false);
            $table->integer("zip_code")->nullable(false);
            $table->string("street", 255)->nullable(false);
            $table->string("contact_num", 15)->nullable(false);
            $table->string("position", 255)->nullable(false);
            $table->string("designation", 255)->nullable(false);
            $table->enum("status_of_appointment", ["permanent", "contract", "casual"])->nullable(false);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aew_employments');
    }
}
