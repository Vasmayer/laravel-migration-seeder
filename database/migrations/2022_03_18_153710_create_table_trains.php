<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',50);
            $table->string('stazione_partenza',50);
            $table->string('stazione_arrivo',50);
            $table->datetime('orario_partenza');
            $table->datetime('orario_arrivo');
            $table->string('code_number',10);
            $table->tinyInteger('carrozze')->unsigned();
            $table->boolean('orario')->default(1);
            $table->boolean('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
