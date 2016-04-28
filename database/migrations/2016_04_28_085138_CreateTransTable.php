<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('trans', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('trans');
    }
}
