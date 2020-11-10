<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\MayInController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SanPhamInController;
use App\Http\Controllers\ThongTinWebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VatLieuInController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/dangnhap',[UserController::class,'getDangNhapAdmin']);
Route::post('admin/dangnhap',[UserController::class,'postDangNhapAdmin']);
Route::get('admin/logout',[UserController::class,'getDangXuatAdmin']);
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function (){
    Route::group(['prefix'=>'danhmuc'],function (){
        Route::get('them',[DanhMucController::class,'getThem']);
        Route::get('sua/{id}',[DanhMucController::class,'getSua']);
        Route::post('sua/{id}',[DanhMucController::class,'postSua']);
        Route::get('danhsach',[DanhMucController::class,'danhsach']);
        Route::post('them',[DanhMucController::class,'postThem']);
        Route::get('xoa/{id}',[DanhMucController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'mayin'],function (){
        Route::get('them',[MayInController::class,'getThem']);
        Route::get('sua/{id}',[MayInController::class,'getSua']);
        Route::post('sua/{id}',[MayInController::class,'postSua']);
        Route::get('danhsach',[MayInController::class,'danhsach']);
        Route::post('them',[MayInController::class,'postThem']);
        Route::get('xoa/{id}',[MayInController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'vatlieuin'],function (){
        Route::get('them',[VatLieuInController::class,'getThem']);
        Route::get('sua/{id}',[VatLieuInController::class,'getSua']);
        Route::post('sua/{id}',[VatLieuInController::class,'postSua']);
        Route::get('danhsach',[VatLieuInController::class,'danhsach']);
        Route::post('them',[VatLieuInController::class,'postThem']);
        Route::get('xoa/{id}',[VatLieuInController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'sanphamin'],function (){
        Route::get('them',[SanPhamInController::class,'getThem']);
        Route::get('sua/{id}',[SanPhamInController::class,'getSua']);
        Route::post('sua/{id}',[SanPhamInController::class,'postSua']);
        Route::get('danhsach',[SanPhamInController::class,'danhsach']);
        Route::post('them',[SanPhamInController::class,'postThem']);
        Route::get('xoa/{id}',[SanPhamInController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'user'],function (){
        Route::get('them',[UserController::class,'getThem']);
        Route::get('sua/{id}',[UserController::class,'getSua']);
        Route::post('sua/{id}',[UserController::class,'postSua']);
        Route::get('danhsach',[UserController::class,'danhsach']);
        Route::post('them',[UserController::class,'postThem']);
        Route::get('xoa/{id}',[UserController::class,'xoa']);
    }) ;
    Route::group(['prefix'=>'thongtinwebsite'],function (){
        
        Route::get('sua',[ThongTinWebsiteController::class,'getSua']);
        Route::post('sua',[ThongTinWebsiteController::class,'postSua']);
     
    }) ;
    Route::group(['prefix'=>'video'],function (){
        Route::get('them',[VideoController::class,'getThem']);
        Route::get('sua/{id}',[VideoController::class,'getSua']);
        Route::post('sua/{id}',[VideoController::class,'postSua']);
        Route::get('danhsach',[VideoController::class,'danhsach']);
        Route::post('them',[VideoController::class,'postThem']);
        Route::get('xoa/{id}',[VideoController::class,'xoa']);
    }) ;
 });

 //Route for fontend
 Route::get('/',[PageController::class,'trangchu']);
 Route::get('trangchu',[PageController::class,'trangchu']);
 Route::get('danh-muc/tat-ca',[PageController::class,'tatca']);
 Route::get('danh-muc/{id}',[PageController::class,'danhmuc']);
 Route::get('may-in/{id}',[PageController::class,'mayin']);
 Route::get('vat-lieu-in/tat-ca',[PageController::class,'vatlieuinAll']);
 Route::get('vat-lieu-in/{id}',[PageController::class,'vatlieuin']);
 Route::get('san-pham-in/{id}',[PageController::class,'sanphamin']);
 Route::post('tim-kiem',[PageController::class,'timkiem']);
 Route::get('video-san-xuat-in-an',[PageController::class,'video']);




