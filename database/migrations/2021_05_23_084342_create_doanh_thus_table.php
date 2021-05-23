<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoanhThusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doanh_thus', function (Blueprint $table) {
            $table->id();
            $table->double('tien_goc');
            $table->double('tien_lai');
            $table->bigInteger('hop_dong_id');
            $table->string('luc')->default(date('d-m-Y'));
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
        Schema::dropIfExists('doanh_thus');
    }
}
