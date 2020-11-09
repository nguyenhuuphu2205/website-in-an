<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function danhsach()
    {
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }
    public function getThem()
    {
        return view('admin.user.them');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'Ten' => 'required|unique:users,name',
                'Email'=> 'required|email|unique:users,email',
                'Password' =>'required|min:6',
                'PasswordAgain' =>'required|same:Password'
            ],
            [
                'Ten.required' => 'Chưa nhập tên',
                'Ten.unique' => 'Tên đăng nhập đã tồn tại',
                'Email.required' => 'Chưa nhập email',
                'Email.email' => 'Email không hợp lệ',
                'Email.unique' => 'Email đã tồn tại',
                'Password.required'=> 'Chưa nhập password',
                'Password.min' => 'Password phải lớn hơn 6 ký tự',
                'PasswordAgain.required' => 'Password nhập lại không khớp',
                'PasswordAgain.same' => 'Password nhập lại không khớp'
            ]);
        $user = new User();
        $user ->name = $request -> Ten;
        $user -> email = $request ->Email;
        $user ->password = bcrypt($request->Password);
        $user -> save();
        return redirect('admin/user/them')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $user = User::find($id);
        return view('admin.user.sua',['user'=>$user]);
    }
    public function postSua(Request $request,$id)
    {
        $this->validate($request,
            [

                'Password' =>'required|min:6',
                'PasswordAgain' =>'required|same:Password'
            ],
            [

                'Password.required'=> 'Chưa nhập password',
                'Password.min' => 'Password phải lớn hơn 6 ký tự',
                'PasswordAgain.required' => 'Password nhập lại không khớp',
                'PasswordAgain.same' => 'Password nhập lại không khớp'
            ]);
        $user = User::find($id);
        $user->password = bcrypt($request ->Password);
        $user ->save();
        return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function xoa($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công');
    }
    public function getDangNhapAdmin()
    {
        return view('admin.login');
    }
    public function postDangNhapAdmin(Request $request)
    {
        $this -> validate($request,
            [
                'email'=> 'required|email',
                'password' => 'required'
            ],
            [
                'email.required'=>'Chưa nhập email',
                'email.email' => 'Email không hợp lệ',
                'password.required' => 'Chưa nhập password'
            ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return redirect('admin/mayin/danhsach');
        }
        else
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập thất bại');
    }
    public function getDangXuatAdmin()
    {
        Auth::logout();
        return redirect('admin/dangnhap');
    }
}
