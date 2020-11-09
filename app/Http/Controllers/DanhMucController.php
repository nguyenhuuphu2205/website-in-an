<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhMuc;
use App\Models\MayIn;

class DanhMucController extends Controller
{
    public function getThem(){
        $danhmucs = DanhMuc::where('danh_muc_cha',-1)->get();
        return view('admin.danhmuc.them',['danhmucs'=>$danhmucs]);
    }
    public function postThem(Request $request){
       
        $danh_muc = new DanhMuc();
        $danh_muc->ten = $request->Ten;
        $danh_muc->danh_muc_cha = $request->danh_muc_cha;
        $danh_muc->noi_bat = $request->NoiBat;
        $danh_muc->save();
        return redirect('admin/danhmuc/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $danhmuc = DanhMuc::find($id);
        $danhmucs = DanhMuc::where('danh_muc_cha',-1)->get();
        return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc,'danhmucs'=>$danhmucs]);
    }
    public function postSua($id, Request $request){
        $danhmuc = DanhMuc::find($id);
        $danhmuc->ten = $request->Ten;
        $danhmuc->danh_muc_cha = $request->danh_muc_cha;
        $danhmuc->noi_bat = $request->NoiBat;
        $danhmuc->save();
        return redirect('admin/danhmuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function danhsach(){
        $danhmucs = DanhMuc::orderBy('danh_muc_cha','desc')->get(); 
        return view('admin.danhmuc.danhsach',['danhmucs'=>$danhmucs]);
    }
    public function xoa($id){
        $danhmuc = DanhMuc::find($id);
        if(count($danhmuc->mayIn)>0 ){
            return redirect('admin/danhmuc/danhsach')->with('thongbao','Cần xóa tất cả máy in thuộc danh mục này trước');
        }
        if(count($danhmuc->danhMucCon)>0){
            return redirect('admin/danhmuc/danhsach')->with('thongbao','Cần xóa tất cả danh mục con thuộc danh mục này trước');
        }
        DanhMuc::destroy($id);
        return redirect('admin/danhmuc/danhsach')->with('thongbao','Xóa thành công');
    }
    public function mayIn($id){
        $mayins = MayIn::where('danh_muc',$id)->get();
        return view('admin.mayin.danhsach',['mayins'=>$mayins]);
    }
}
