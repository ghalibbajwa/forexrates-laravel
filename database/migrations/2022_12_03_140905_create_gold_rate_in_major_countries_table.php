<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoldRateInMajorCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold_rate_in_major_countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Currency');
            $table->string('Symbol');
            $table->string('Gm10');
            $table->string('Tola1');
            $table->string('Ounce1');
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
        Schema::dropIfExists('gold_rate_in_major_countries');
    }
}
