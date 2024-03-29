<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPhamIn extends Model
{
    use HasFactory;
    protected $table = 'san_pham_in';
    public function vatLieu(){
        return $this->belongsTo('App\Models\VatLieuIn','vat_lieu','id');
    }
}
