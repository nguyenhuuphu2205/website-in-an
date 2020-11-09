@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Máy in / thiết bị
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
                        <th>Danh mục</th>
                        <th>Tên</th>
                        <th>Mã</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mayins as $cc)
                    <tr class="odd gradeX" align="center"  >
                        <td>{{$cc->id}}</td>
                        <td>{{$cc->danhMuc->ten}}</td>
                        <td>{{$cc->ten}}
                            <div>
                        <img src="upload/mayin/{{$cc->hinh_anh}}" style="width: 100px;"></div>
                        </td>
                        <td>
                         {{$cc->ma_san_pham}}
                        </td>
                        <td>{{$cc->created_at}}</td>
                        <td>{{$cc->updated_at}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/mayin/xoa/{{$cc->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/mayin/sua/{{$cc->id}}">Sửa</a></td>
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