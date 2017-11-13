<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adImage', function (Blueprint $table) {
            $table->increments('imgID');
            $table->integer('adID')->unsigned()->index();
            $table->foreign('adID')->references('adID')->on('advertise')->onDelete('cascade')->onUpdate('No Action');
            $table->string('imageName');
            $table->boolean('isDefault')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adImage');
    }
}
