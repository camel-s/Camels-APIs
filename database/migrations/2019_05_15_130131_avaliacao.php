<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Avaliacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rating');
            $table->date('tipo');
            $table->string('comentario');

            $table->unsignedBigInteger('usuario_id')->unsigned();
            $table->unsignedBigInteger('oferta_id')->unsigned();
           
            $table->foreign('usuario_id')
            ->references('id')->on('usuarios')
            ->onDelete('cascade');
            
            $table->foreign('oferta_id')
            ->references('id')->on('ofertas')
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
