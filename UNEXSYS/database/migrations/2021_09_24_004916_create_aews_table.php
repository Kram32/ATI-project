<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("fname", 255)->nullable(false);
            $table->string("mname", 10)->nullable();
            $table->string("lname", 255)->nullable(false);
            $table->string("suffix", 255)->nullable();
            $table->date("birthdate")->nullable(false);
            $table->enum("sex", ["male", "female"])->nullable(false);
            $table->enum("civil_status", ["single", "married", "legally", "separated", "widow", "widower"])->nullable(false);
            $table->integer("curr_reg_code")->nullable(false);
            $table->integer("curr_prov_dist_code")->nullable(false);
            $table->integer("curr_city_mun_code")->nullable(false);
            $table->integer("curr_bgy_code")->nullable(false);
            $table->integer("curr_zip_code")->nullable(false);
            $table->string("curr_street", 255)->nullable(false);
            $table->integer("perm_reg_code")->nullable(false);
            $table->integer("perm_prov_dist_code")->nullable(false);
            $table->integer("perm_city_mun_code")->nullable(false);
            $table->integer("perm_bgy_code")->nullable(false);
            $table->integer("perm_zip_code")->nullable(false);
            $table->string("perm_street", 255)->nullable(false);
            $table->string("mobile", 15)->nullable(false);
            $table->text("email")->nullable(false);
            $table->text("password")->nullable(false);
            $table->boolean("status")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aews');
    }
}
