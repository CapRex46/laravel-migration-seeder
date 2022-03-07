<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxViaggi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box_viaggi', function (Blueprint $table) {
            $table->id();
            $table-> string("trips", 100);
            $table-> string("season", 100);
            $table-> string("country", 100);
            $table-> text("description");
            $table-> smallInteger("days");
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
        Schema::dropIfExists('box_viaggi');
    }
}
