<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\ThongTinWebsite;
use Illuminate\Http\Request;
use App\Models\SanPhamIn;
use App\Models\VatLieuIn;
use App\Models\MayIn;
use App\Models\Video;
class PageController extends Controller
{
    function __construct()
    {
       $thong_tin_website = ThongTinWebsite::first();
       $danh_muc_cha = DanhMuc::where('danh_muc_cha',-1)->get();
       view()->share('thongtinwebsite',$thong_tin_website);
       view()->share('danhmuccha',$danh_muc_cha);

    }
    
    public function trangchu(){
        $danh_muc_noi_bat = DanhMuc::where('noi_bat',1)->get();
        // $sanphamins = SanPhamIn::take(4)->get();
        $vatlieuins = VatLieuIn::all();
        return view('pages.trangchu',['danhmucnoibat'=>$danh_muc_noi_bat,'vatlieuins'=>$vatlieuins]);
    }
    public function danhmuc($id){
       
        $danhmuc = DanhMuc::find($id);
        $mayins = MayIn::where('danh_muc',$id)->get();
  
        $danhMucCon = $danhmuc->danhMucCon;
        if(count($danhMucCon)>0){
            foreach($danhMucCon as $dmC){
                error_log('in foreach');
                $mayins = $mayins->merge($dmC->mayIn);
                error_log($dmC->mayIn);
              
            }
        }
        error_log($mayins);
        return view('pages.danhmuc',['mayins'=>$mayins,'danhmuc'=>$danhmuc]);

    }
    public function tatca(){
        $danhmuc = new DanhMuc();
        $danhmuc->ten="Tất cả thiết bị";
        $mayins = MayIn::all();
        return view('pages.danhmuc',['mayins'=>$mayins,'danhmuc'=>$danhmuc]);
    }
    public function mayin($id){
        $mayin = MayIn::find($id);
        $iddanhmuc = $mayin->danh_muc;
        $danhmuc =  $danhmuc = DanhMuc::find($iddanhmuc);
        $may_in_tuong_tu = MayIn::where('danh_muc',$iddanhmuc)->where('id','<>',$id)->take(4)->get();
        return view('pages.mayin',['mayin'=>$mayin,'mayintuongtu'=>$may_in_tuong_tu,'danhmuc'=>$danhmuc]);
    }
    public function vatlieuin($id){
        $vatlieuin = VatLieuIn::find($id);
        $sanphamins = $vatlieuin->sanPhamIn;
        return view('pages.vatlieuin',['vatlieuin'=>$vatlieuin,'sanphamins'=>$sanphamins]);
        
    }
    public function vatlieuinAll(){
        $vatlieuin = new VatLieuIn();
        $vatlieuin->ten = "Tất cả";
        $sanphamins = SanPhamIn::all();
        return view('pages.vatlieuin',['vatlieuin'=>$vatlieuin,'sanphamins'=>$sanphamins]);
    }
    public function sanphamin($id){
        $sanphamin = SanPhamIn::find($id);
        $vatlieu = VatLieuIn::find($sanphamin->vat_lieu);
        $sanphamintuongtu = SanPhamIn::where('vat_lieu',$vatlieu->id)->where('id','<>',$id)->take(4)->get();
        return view('pages.sanphamin',['sanphamin'=>$sanphamin,'vatlieuin'=>$vatlieu,'sanphamintuongtu'=>$sanphamintuongtu]);
    }
    public function timkiem(Request $request){
        $mayins = MayIn::where('ten','like','%'.$request->tukhoa.'%')->get();
        $danhmuc = new DanhMuc();
        $danhmuc->ten="Kết quả tìm kiếm cho từ khóa: ".$request->tukhoa;
        return view('pages.danhmuc',['mayins'=>$mayins,'danhmuc'=>$danhmuc]);

    }
    public function video(){
        $videos = Video::all();
        return view('pages.video',['videos'=>$videos]);

    }
}
