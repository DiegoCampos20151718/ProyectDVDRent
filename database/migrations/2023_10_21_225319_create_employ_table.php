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
        Schema::create('employ', function (Blueprint $table) {
            $table->id('id_employ');
            $table->string('first_name', 100);
            $table->string('last_name', 50);
            $table->integer('phone_number');
            $table->string('address', 100);
            $table->string('workstation', 50);
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
        Schema::dropIfExists('employ');
    }
};
