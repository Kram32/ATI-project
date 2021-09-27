<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("model_type", 191)->nullable();
            $table->bigInteger("model_id")->nullable();
            $table->char("uuid", 36)->nullable(false);
            $table->string("collection_name", 191)->nullable();
            $table->string("name", 191)->nullable();
            $table->string("file_name", 191)->nullable();
            $table->string("mime_type", 191)->nullable(false);
            $table->string("disk", 191)->nullable();
            $table->string("conversions_disk", 191)->nullable(false);
            $table->bigInteger("size")->nullable();
            $table->json("manipulations")->nullable();
            $table->json("custom_properties")->nullable();
            $table->json("generated_conversions")->nullable();
            $table->json("responsive_images")->nullable();
            $table->integer("order_column")->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
