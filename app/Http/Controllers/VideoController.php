<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getThem(){
        return view('admin.video.them');
    }
    public function postThem(Request $request){
        $video = new Video();
        $video->ten = $request->Ten;
        $video->ten_khong_dau = changeTitle($request->Ten);
        $video->link = $request->Link;
        $video->save();
        return redirect('admin/video/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id){
        $video = Video::find($id);
        return view('admin.video.sua',['video'=>$video]);
    }
    public function postSua($id,Request $request){
        $video = Video::find($id);
        $video->ten = $request->Ten;
        $video->ten_khong_dau = changeTitle($request->Ten);
        $video->link = $request->Link;
        $video->save();
        return redirect('admin/video/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function danhsach(){
        $videos = Video::all();
        return view('admin.video.danhsach',['videos'=>$videos]);
    }
    public function xoa($id){
        Video::destroy($id);
        return redirect('admin/video/danhsach')->with('thongbao','Xóa thành công');
    }
    
}
