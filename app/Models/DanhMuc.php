<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Expr\FuncCall;

class DanhMuc extends Model
{
    use HasFactory;
    protected $table='danh_muc';
    public function danhMucCha(){
        return $this->belongsTo('App\Models\DanhMuc','danh_muc_cha','id');
    }
    public function danhMucCon(){
        return $this->hasMany('App\Models\DanhMuc','danh_muc_cha','id');
    }
    public function mayIn(){
        return $this->hasMany('App\Models\MayIn','danh_muc','id');
    }
}
