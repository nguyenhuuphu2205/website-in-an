@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thông tin Website
                        <small>Sửa</small>
                    </h1>
                    @if(count($errors) >0)
                        <div class="alert alert-danger">
                            @foreach($errors ->all() as $err)
                                {{$err}} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/thongtinwebsite/sua" method="POST">
                        <input name="_token" type="hidden" value="{{csrf_token()}}">
                      
                        <div class="form-group">
                            <label>SDT</label>
                            <input class="form-control" name="SDT" placeholder="Nhập số SDT"  value="{{$thongtinwebsite->sdt}}" required/>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="DiaChi" placeholder="Nhập địa chỉ"  required value="{{$thongtinwebsite->dia_chi}}"/>
                        </div>
                      
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="Email" placeholder="Nhập email" required value="{{$thongtinwebsite->email}}"/>
                        </div>
                        <div class="form-group">
                            <label>Zalo</label>
                            <input class="form-control" name="Zalo" placeholder="Nhập zalo" required value="{{$thongtinwebsite->zalo}}"/>
                        </div>
                        <div class="form-group">
                            <label>Mô tả </label>
                            <input class="form-control" name="MoTa" placeholder="Nhập mô tả" required value="{{$thongtinwebsite->mo_ta}}"/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Nhập lại</button>
                        </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection