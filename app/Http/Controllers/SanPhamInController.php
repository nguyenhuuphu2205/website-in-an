<?php

namespace App\Http\Controllers;

use App\Models\SanPhamIn;
use App\Models\VatLieuIn;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SanPhamInController extends Controller
{
    public function getThem(){
        $vatlieuins = VatLieuIn::all();
        return view('admin.sanphamin.them',['vatlieuins'=>$vatlieuins]);
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'MoTa'=>'required',
        ],
        [
            'MoTa.required'=>'Chưa nhập mô tả'
        ]);
        $sanphamin = new SanPhamIn();
        $sanphamin->ten = $request->Ten;
        $sanphamin->mo_ta = $request->MoTa;
        $sanphamin->vat_lieu = $request->VatLieu;
        $file = $request ->file('AnhDaiDien');
        $name = $file->getClientOriginalName();
        $Hinh =  Str::random(4)."_".$name;
        while (file_exists('upload/sanphamin/'.$Hinh))
        {
            $Hinh = Str::random(4)."_".$name;
        }
        $file ->move('upload/sanphamin/',$Hinh);
        $sanphamin -> hinh_anh = $Hinh;
        $sanphamin->save();
        return redirect('admin/sanphamin/them')->with('thongbao','Thêm thành công');

    }
    public function getSua($id){
        $sanphamin = SanPhamIn::find($id);
        $vatlieuins = VatLieuIn::all();
        return view('admin.sanphamin.sua',['sanphamin'=>$sanphamin,'vatlieuins'=>$vatlieuins]);
    }
    public function postSua($id, Request $request){
        $this->validate($request,
        [
            'MoTa'=>'required',
        ],
        [
            'MoTa.required'=>'Chưa nhập mô tả'
        ]);
        $sanphamin = SanPhamIn::find($id);
        $sanphamin->ten = $request->Ten;
        $sanphamin->mo_ta = $request->MoTa;
        $sanphamin->vat_lieu = $request->VatLieu;
        if($request->hasFile('AnhDaiDien'))
        {
            $this->validate($request,
                [
                    'AnhDaiDien' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
                ],
                [
                    'AnhDaiDien.required' => 'Bạn chưa chọn hình đại diện',
                'AnhDaiDien.image' => 'Ảnh định dạng không hợp lệ',
                'AnhDaiDien.mimes' => 'Ảnh định dạng không hợp lệ'
                ]);
            $file = $request ->file('AnhDaiDien');
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
            while (file_exists('upload/sanphamin/'.$Hinh))
            {
                $Hinh = Str::random(4)."_".$name;
            }
            $file ->move('upload/sanphamin/',$Hinh);
            $sanphamin -> hinh_anh = $Hinh;
        }
        $sanphamin->save();
        return redirect('admin/sanphamin/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function danhsach(){
        $sanphamins = SanPhamIn::all();
        return view('admin.sanphamin.danhsach',['sanphamins'=>$sanphamins]);
    }
    public function xoa($id){
        SanPhamIn::destroy($id);
        return redirect('admin/sanphamin/danhsach')->with('thongbao','Xóa thành công');
    }
}
