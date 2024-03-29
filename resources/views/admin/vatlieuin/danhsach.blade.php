@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Vật liệu in
                        <small>Danh sách</small>
                    </h1>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{@session('thongbao')}}
                        </div>

                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>

                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vatlieuins as $loai)
                    <tr class="odd gradeX" align="center">
                        <td>{{$loai->id}}</td>
                        <td>{{$loai -> ten}}</td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/vatlieuin/xoa/{{$loai ->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/vatlieuin/sua/{{$loai->id}}">Sửa</a></td>
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