<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise', function (Blueprint $table) {
            $table->increments('adID');
            $table->integer('catagoryID')->unsigned()->index();
            $table->foreign('catagoryID')->references('catagoryID')->on('catagory')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('areaID')->unsigned()->index();
            $table->foreign('areaID')->references('areaID')->on('area')->onDelete('cascade')->onUpdate('No Action');
            $table->string('adTitle');
            $table->string('description')->nullable();
            $table->double('price', 8,2)->default(0);
            $table->string('mobileNumber',25);
            $table->string('tag')->nullable();
            $table->integer('impression')->default(0);
            $table->boolean('isApprove')->default(0);
            $table->integer('userID')->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('advertise');
    }
}
