<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaiSuatThangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lai_suat_thangs', function (Blueprint $table) {
            $table->id();
            $table->integer('thang');
            $table->float('lai_the_chap');
            $table->float('lai_tin_chap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lai_suat_thangs');
    }
}
