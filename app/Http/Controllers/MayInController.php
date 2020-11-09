<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\MayIn;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MayInController extends Controller
{
    public function getThem(){
        $danhmucs = DanhMuc::all();
        return view('admin.mayin.them',['danhmucs'=>$danhmucs]);
    }
    public function postThem(Request $request){
        $this->validate($request,
        [
            'MoTa'=>'required',
        ],
        [
            'MoTa.required'=>'Chưa nhập mô tả'
        ]);
        $may_in = new MayIn();
        $may_in -> ten = $request -> Ten;
        $may_in -> ma_san_pham = $request->MaSanPham;
        $may_in -> mo_ta = $request->MoTa;
        $may_in ->danh_muc = $request->DanhMucCha;
        $file = $request ->file('AnhDaiDien');
        $name = $file->getClientOriginalName();
        $Hinh =  Str::random(4)."_".$name;
        while (file_exists('upload/mayin/'.$Hinh))
        {
            $Hinh = Str::random(4)."_".$name;
        }
        $file ->move('upload/mayin/',$Hinh);
        $may_in -> hinh_anh = $Hinh;
        $may_in->save();
        return redirect('admin/mayin/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $danhmucs = DanhMuc::all();
        $mayin = MayIn::find($id);
        return view('admin.mayin.sua',['mayin'=>$mayin, 'danhmucs'=>$danhmucs]);
    }
    public function postSua($id,Request $request){
        $this->validate($request,
        [
            'MoTa'=>'required',
        ],
        [
            'MoTa.required'=>'Chưa nhập mô tả'
        ]);
        $may_in = MayIn::find($id);
        $may_in->ten = $request->Ten;
        $may_in->ma_san_pham = $request->MaSanPham;
        $may_in->mo_ta = $request->MoTa;
        $may_in->danh_muc = $request->DanhMucCha;
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
            while (file_exists('upload/mayin/'.$Hinh))
            {
                $Hinh = Str::random(4)."_".$name;
            }
            $file ->move('upload/mayin/',$Hinh);
            $may_in -> hinh_anh = $Hinh;
        }
        $may_in->save();
        return redirect('admin/mayin/sua/'.$id)->with('thongbao','Sửa thành công');


    }
    public function danhsach(){
        $may_ins = MayIn::all();
        return view('admin.mayin.danhsach',['mayins'=>$may_ins]);
    }
    public function xoa($id){
        MayIn::destroy($id);
        return redirect('admin/mayin/danhsach')->with('thongbao','Xóa thành công');
    }
}
