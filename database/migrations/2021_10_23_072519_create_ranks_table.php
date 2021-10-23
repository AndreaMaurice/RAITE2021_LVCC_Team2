<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ranks', function (Blueprint $table) {
            $table->id();
            $table->string('captain');
            $table->string('chief_mate');
            $table->string('second_mate');
            $table->string('third_mate');
            $table->string('deck_cadet');
            $table->string('chief_engineer');
            $table->string('second_engineer');
            $table->string('third_engineer');
            $table->string('fourth_engineer');
            $table->string('engine_cadet');
            $table->string('electrician');
            $table->string('boatswain');
            $table->string('pump_man');
            $table->string('able_bodied_seaman');
            $table->string('ordinary_seaman');
            $table->string('fitter');
            $table->string('oiler');
            $table->string('wiper');
            $table->string('chief_cook');
            $table->string('steward');
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
        Schema::dropIfExists('ranks');
    }
}
