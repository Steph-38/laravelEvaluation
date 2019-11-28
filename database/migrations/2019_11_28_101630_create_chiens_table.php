<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('description');
            $table->string('sexe');
            $table->integer('age');
            $table->integer('poids');
            $table->string('taille');
            $table->timestamps();
        });

        Schema::table('chiens', function (Blueprint $table) {
            $table->unsignedBigInteger('race_id');
            $table->foreign('race_id')->references('id')->on('races');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chiens');
    }
}
