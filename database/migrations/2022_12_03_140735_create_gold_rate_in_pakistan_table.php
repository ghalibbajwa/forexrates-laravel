<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoldRateInPakistanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold_rate_in_pakistan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Gold_Rate');
            $table->string('k24');
            $table->string('k22');
            $table->string('k21');
            $table->string('k18');
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
        Schema::dropIfExists('gold_rate_in_pakistan');
    }
}
