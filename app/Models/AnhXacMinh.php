<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnhXacMinh extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function hopDong(){
        return $this->belongsTo(HopDong::class);
    }

}
