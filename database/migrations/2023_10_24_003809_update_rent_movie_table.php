<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rent_movie', function(Blueprint $table){
            $table->unsignedBigInteger('client_id');
            $table-> foreign('client_id')
            -> references('id')-> on('client')
            ->onDelete('cascade');

            $table->unsignedBigInteger('employ_id');
            $table-> foreign('employ_id')
            -> references('id')-> on('employ')
            ->onDelete('cascade');

            $table->unsignedBigInteger('movie_id');
            $table-> foreign('movie_id')
            -> references('id')-> on('movie')
            ->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rent_movie', function(Blueprint $table){
            $table->dropForeign('rent_movie_client_id_foreign');
            $table->dropColum('client_id');
        });
        Schema::table('rent_movie', function(Blueprint $table){
            $table->dropForeign('rent_movie_employ_id_foreign');
            $table->dropColum('employ_id');
        });
        Schema::table('rent_movie', function(Blueprint $table){  
            $table->dropForeign('rent_movie_movie_id_foreign');
            $table->dropColum('movie_id'); 
        });
    }
};
