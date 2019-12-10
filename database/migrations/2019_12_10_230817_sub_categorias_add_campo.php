<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubCategoriasAddCampo extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table( 'sub_categorias', function ( $table ) {
            $table->string( 'categoria', 250 );
           
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('sub_categorias', function ($table) {
            $table->dropColumn('categoria');

        });
    }
}
