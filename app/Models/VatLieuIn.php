<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VatLieuIn extends Model
{
    use HasFactory;
    protected $table = 'vat_lieu_in';
    public function sanPhamIn(){
        return $this->hasMany('App\Models\SanPhamIn','vat_lieu','id');
    }
}
