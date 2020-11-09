@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Người dùng quản trị
                        <small>Danh sách</small>
                    </h1>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Password</th>
                  
                        <th>Xóa</th>
                        <th>Đổi password</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $sc)
                        <tr class="odd gradeX" align="center"  >
                            <td>{{$sc->id}}</td>
                            <td>{{$sc->name}}

                            </td>
                            <td>
                                {{$sc->email}}
                            </td>
                            <td>{{$sc->password}}</td>
                           
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/xoa/{{$sc->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/sua/{{$sc->id}}">Đổi password</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection