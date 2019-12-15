<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MisServiciosAddCampo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'mis_servicios', function ( $table ) {
            $table->string( 'sub_categoria', 250 );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('mis_servicios', function ($table) {
            $table->dropColumn('sub_categoria');
        });
    }
}
