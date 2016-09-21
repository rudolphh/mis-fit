<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function(Blueprint $table){

            $table->enum('gender', ['male', 'female'])->default('male');
            $table->decimal('height', 5, 2)->nullable();
            $table->enum('system', ['imperial', 'metric'])->default('imperial');

            $table->enum('goal', ['loss','maint','gain'])->default('loss');

            // activity_level determines the activity_multiplier 
            $table->enum('activity_level', ['A','B','C','D','E'])->default('A');
            // experienced users can adjust this as needed for thier needs
            $table->decimal('activity_mult', 3, 2)->default('1.10');
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
        Schema::table('users', function(Blueprint $table){

            $table->dropColumn('gender');
            $table->dropColumn('height');
            $table->dropColumn('system');
            $table->dropColumn('goal');
            $table->dropColumn('activity_level');
            $table->dropColumn('activity_mult');
        });
    }
}
