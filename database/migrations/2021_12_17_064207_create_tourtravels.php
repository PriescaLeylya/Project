<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourtravels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourtravels', function (Blueprint $table) {
            $table->id();
            $table->string('Tujuan',20);
            $table->string('photo',200);
            $table->string('Destinasi',200);
            $table->string('Harga',30);
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
        Schema::dropIfExists('tourtravels');
    }
}
