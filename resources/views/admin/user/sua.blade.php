@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Người dùng quản trị
                        <small>Đổi password</small>
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
                    <form action="admin/user/sua/{{$user->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="form-group">
                            <label>Tên</label>
                            <input class="form-control" name="Ten" placeholder="Nhập tên " required  value="{{$user->name}}" readonly/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="Email" placeholder="Nhập email " required  readonly value="{{$user->email}}"/>
                        </div>
                        <div class="form-group">
                            <label>Password mới</label>
                            <input class="form-control" type="password" name="Password" placeholder="Nhập password " required />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại password</label>
                            <input class="form-control" type="password" name="PasswordAgain" placeholder="Nhập lại password " required />
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