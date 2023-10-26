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
        Schema::table('movie', function(Blueprint $table){
            $table->unsignedBigInteger('gender_id');
            $table-> foreign('gender_id')
            -> references('id')-> on('movie_gender')
            ->onDelete('cascade');

            $table->unsignedBigInteger('clasification_id');
            $table-> foreign('clasification_id')
            -> references('id')-> on('movie_clasification')
            ->onDelete('cascade');

            $table->unsignedBigInteger('category_id');
            $table-> foreign('category_id')
            -> references('id')-> on('category')
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
        Schema::table('movie', function(Blueprint $table){
            $table->dropForeign('movie_gender_id_foreign');
            $table->dropColumn('gender_id');
            $table->dropForeign('movie_clasification_id_foreign');
            $table->dropColumn('clasification_id');
            $table->dropForeign('movie_category_id_foreign');
            $table->dropColumn('category_id');
            });
    }
};
