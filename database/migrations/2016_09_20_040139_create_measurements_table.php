<?php

//use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('measurements', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id')->unsigned();

            // body measurements
            $table->decimal('weight', 5, 2);
            $table->decimal('neck', 5, 2);
            $table->decimal('waist', 5, 2);
            $table->decimal('hip', 5, 2)->nullable();// don't need for males

            // for future images model
            $table->bigInteger('image_id')->unsigned()->nullable();

            $table->timestamps();// for created_at and updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('measurements');
    }
}
