@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Video
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
                        <th>Link</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($videos as $video)
                        <tr class="odd gradeX" align="center">
                            <td>{{$video->id}}
                           
                            </td>
                            <td>
                           <?php 
                           $code_embed_array = explode("/", $video->link); 
                           $code_embed = end($code_embed_array);
                           ?>
                            <iframe width="200" height="200" src="https://www.youtube.com/embed/{{$code_embed}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <a > {{$video->ten}}</a>
                            </td>
                        <td>{{$video->link}}</td>
                       

                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/video/xoa/{{$video->id}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/video/sua/{{$video->id}}">Sửa</a></td>
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