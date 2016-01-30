<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SendMail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sendmail', function (Blueprint $table){
            $table->increments('id');
            $table->string('nume');
            $table->string('prenume');
            $table->string('email');
            $table->integer('ziua');
            $table->integer('luna');
            $table->string('sexul');
            $table->string('compania');
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
        Schema::drop('sendmail');
    }
}
