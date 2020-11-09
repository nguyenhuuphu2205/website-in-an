@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Danh Mục
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
                        <th>Tên Danh Mục</th>
                        <th>Danh Mục Cha</th>
                        <th>Nổi bật</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($danhmucs as $dm)
                        <tr class="odd gradeX" align="center">
                            <td>{{$dm->id}}</td>
                            <td>
                            <a >   {{$dm->ten}}</a>
                             
                            </td>
                            <td>
                            @if($dm->danh_muc_cha != -1)
                            {{$dm->danhMucCha->ten}}
                            @else
                            Không có danh mục cha
                            @endif
                            </td>
                        <td>{{$dm->noi_bat ==1 ? "Có":"Không "}}</td>

                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/danhmuc/xoa/{{$dm->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/danhmuc/sua/{{$dm->id}}">Sửa</a></td>
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