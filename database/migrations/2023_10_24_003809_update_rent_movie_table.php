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

            $table->unsignedBigInteger('user_id');
            $table-> foreign('user_id')
            -> references('id')-> on('users')
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
        /*
        Schema::table('rent_movie', function(Blueprint $table){
            $table->dropForeign('rent_movie_client_id_foreign');
            $table->dropColumn('client_id');
        });*/
        Schema::table('rent_movie', function(Blueprint $table){
            $table->dropForeign('rent_movie_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::table('rent_movie', function(Blueprint $table){  
            $table->dropForeign('rent_movie_movie_id_foreign');
            $table->dropColumn('movie_id'); 
        });
    }
};
