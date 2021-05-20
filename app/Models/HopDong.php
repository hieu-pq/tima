<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    use HasFactory;
    protected $guarded = ['ma_hopdong'];

    public function nguoiTao(){
        return $this->belongsTo(Employee::class);
    }

    public function khachHang(){
        return $this->belongsTo(User::class);
    }

    public function anhXacMinh(){
        return $this->hasMany(AnhXacMinh::class);
    }

    public function khoanVay(){
        return $this->belongsTo(KhoanVay::class);
    }

}
