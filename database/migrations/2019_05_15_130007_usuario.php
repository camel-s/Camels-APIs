<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->date('data_nascimento');
            
            $table->unsignedBigInteger('login_id')->unsigned();
            $table->unsignedBigInteger('endereco_id')->unsigned();
            $table->foreign('login_id')
            ->references('id')->on('logins')
            ->onDelete('cascade');
            
            $table->foreign('endereco_id')
            ->references('id')->on('enderecos')
            ->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
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
    }
}
