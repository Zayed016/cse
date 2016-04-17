<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */
     public function up()
    {
        
        Schema::create('delivery', function (Blueprint $table) {
            $table->increments('d_id');
            $table->text('f_list');
            $table->integer('bill');
            $table->integer('ref_id')->unique();
            $table->timestamp('time');
        });

        Schema::create('food', function (Blueprint $table) {
            $table->integer('f_id')->unique()->primary();
            $table->text('type');
            $table->text('name');
            $table->integer('price');
           
        });
        Schema::create('stuff', function (Blueprint $table) {
            $table->increments('s_id');
            $table->text('type');
            $table->text('name');
            $table->text('mobile');
           
        });
         Schema::create('trans', function (Blueprint $table) {
            $table->increments('idd');
            $table->integer('ref_id')->unique();
            $table->integer('t_id');
            $table->integer('bill');
            $table->text('address');
            $table->text('mobile');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('delivery');
        Schema::drop('food');
        Schema::drop('stuff');
        Schema::drop('trans');
    }
}
