@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video
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
                <form action="admin/video/sua/{{$video->id}}" method="POST">
                    <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <label>Tên video</label>
                        <input class="form-control" name="Ten" placeholder="Nhâp tên video" value="{{$video->ten}}" required />
                    </div>
                    <div class="form-group">
                        <label>Link youtube</label>
                        <input class="form-control" name="Link" placeholder="Nhâp link" value="{{$video->link}}" required />
                        <br>
                        <?php 
                        $code_embed_array = explode("/", $video->link); 
                        $code_embed = end($code_embed_array);
                        ?>
                         <iframe width="300" height="300" src="https://www.youtube.com/embed/{{$code_embed}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                         <br>
                    </div>
                  

                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Nhâp lại</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
    @endsection