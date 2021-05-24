<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNganSachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngan_saches', function (Blueprint $table) {
            $table->id();
            $table->integer('nam');
            $table->double('tong');
            $table->double('bo_sung')->nullable();
            $table->integer('lan');
            $table->double('con_lai');
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
        Schema::dropIfExists('ngan_saches');
    }
}
