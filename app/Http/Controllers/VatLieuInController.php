<?php

namespace App\Http\Controllers;

use App\Models\VatLieuIn;
use Illuminate\Http\Request;

class VatLieuInController extends Controller
{
    public function getThem(){
        return view('admin.vatlieuin.them');
    }
    public function postThem(Request $request){
        $vat_lieu_in = new VatLieuIn();
        $vat_lieu_in->ten = $request->Ten;
        $vat_lieu_in->save();
        return redirect('admin/vatlieuin/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $vat_lieu_in = VatLieuIn::find($id);
        return view('admin.vatlieuin.sua',['vatlieuin'=>$vat_lieu_in]);
    }
    public function postSua($id,Request $request){
        $vat_lieu_in = VatLieuIn::find($id);
        $vat_lieu_in->ten = $request->Ten;
        $vat_lieu_in->save();
        return redirect('admin/vatlieuin/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function danhsach(){
        $vatlieuins = VatLieuIn::all();
        return view('admin.vatlieuin.danhsach',['vatlieuins'=>$vatlieuins]);
    }
    public function xoa($id){
        $vatlieu = VatLieuIn::find($id);
        if(count($vatlieu->sanPhamIn)>0){
            return redirect('admin/vatlieuin/danhsach')->with('thongbao','Cần xóa tất cả sản phẩm in của loại vật liệu này trước');
        }else{
            $vatlieu->delete();
            return redirect('admin/vatlieuin/danhsach')->with('thongbao','Xóa thành công');
        }
    }
}
