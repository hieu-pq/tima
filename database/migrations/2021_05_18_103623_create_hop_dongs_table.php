<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopDongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dongs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hopdong');
            $table->string('kieu'); //the chap || khong the chap
            $table->integer('thu_nhap');
            $table->string('nghe_nghiep');
            $table->string('dangky_xe');
            $table->string('bien_so');
            $table->bigInteger('user_id');
            $table->bigInteger('employee_id')->nullable();
            $table->bigInteger('khoanvay_id')->nullable();
            $table->integer('tong_lai');
            $table->integer('lai_suat')->nullable(); // %
            $table->integer('thoi_han')->nullable();
            $table->integer('tien_vay')->nullable();
            $table->string('trang_thai')->default('pending');
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hop_dongs');
    }
}
