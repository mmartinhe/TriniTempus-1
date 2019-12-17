<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCampoMultimedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up() {
        Schema::table( 'multimedias', function ( Blueprint $table ) {
           $table->bigIncrements('id');
			$table->integer('id_usuario');
			$table->string('archivo');
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
			Schema::dropIfExists('multimedias');

    
    }
}
