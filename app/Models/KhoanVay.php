<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhoanVay extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function hopDong(){
        return $this->hasMany(HopDong::class);
    }

}
