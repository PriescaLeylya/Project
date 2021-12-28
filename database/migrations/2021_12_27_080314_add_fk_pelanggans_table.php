<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelanggans', function(Blueprint $table)
        {
            $table->unsignedBigInteger('tour_id')->nullable()->after('nama');
            $table->foreign('tour_id')->references('id')->on('tourtravels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelanggans', function(Blueprint $table){
            $table->dropForeign(['tour_id']);
        });
    }
}
