<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Oferente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('usuario_id')->unsigned();
            
            $table->foreign('usuario_id')
            ->references('id')->on('usuarios')
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
