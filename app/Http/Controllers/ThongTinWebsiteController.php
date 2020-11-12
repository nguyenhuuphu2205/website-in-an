<?php

namespace App\Http\Controllers;

use App\Models\ThongTinWebsite;
use Illuminate\Http\Request;

class ThongTinWebsiteController extends Controller
{
    public function getSua(){
        $thong_tin_website = ThongTinWebsite::first();
        return view('admin.thongtinwebsite.sua',['thongtinwebsite'=>$thong_tin_website]);
    }
    public function postSua(Request $request){
        $thong_tin_website = ThongTinWebsite::first();
        $thong_tin_website->sdt = $request->SDT;
        $thong_tin_website->dia_chi = $request->DiaChi;
        $thong_tin_website->email = $request->Email;
        $thong_tin_website->zalo = $request->Zalo;
        $thong_tin_website->mo_ta = $request->MoTa;
        $thong_tin_website->save();
        return redirect('admin/thongtinwebsite/sua')->with('thongbao','Sửa thành công');
    }
}
