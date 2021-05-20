<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhoanVaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoan_vays', function (Blueprint $table) {
            $table->id();
            $table->integer('lai_suat'); // %
            $table->integer('tien_vay');
            $table->integer('thoi_han'); // 3 6 12
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
        Schema::dropIfExists('khoan_vays');
    }
}
