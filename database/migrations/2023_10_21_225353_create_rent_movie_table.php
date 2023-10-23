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
        Schema::create('rent_movie', function (Blueprint $table) {
            $table->id();
            $table->date('date_of_rent');
            $table->date('date_of_delivery');
            $table->string('state_of_rent', 30);
            $table->double('total_price', 15,  8);
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
        Schema::dropIfExists('rent_movie');
    }
};
