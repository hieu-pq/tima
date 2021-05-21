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
            $table->string('kieu_hd'); //the chap || khong the chap
            $table->string('ma_hd')->unique();
            $table->string('ho_ten');
            $table->string('gioi_tinh');
            $table->string('ngay_sinh');
            $table->string('hoc_van');
            $table->double('thu_nhap');
            $table->string('so_dt');
            $table->string('dia_chi');
            $table->string('email');
            $table->string('so_cmnd');
            $table->string('noi_cap');
            $table->string('ngay_cap');
            $table->double('khoan_vay');
            $table->string('thang_vay');
            $table->string('lai_suat');
            $table->string('ten_nh');
            $table->string('stk_nh');
            $table->string('chutk_nh');
            $table->bigInteger('user_id');
            $table->string('trang_thai')->default('pending');
            $table->string('ghi_chu')->nullable();
            $table->timestamps();

            $table->string('ngay_giai_ngan')->nullable();
            $table->bigInteger('employee_id')->nullable();
            $table->json('ky_han')->nullable();

            $table->string('tt_tai_san')->nullable(); // the chap

        });
    }

    public function down()
    {
        Schema::dropIfExists('hop_dongs');
    }
}
