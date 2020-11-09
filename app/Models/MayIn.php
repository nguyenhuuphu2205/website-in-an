<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayIn extends Model
{
    use HasFactory;
    protected $table='may_in';
    public function danhMuc(){
        return $this->belongsTo('App\Models\DanhMuc','danh_muc','id');
    }
}
