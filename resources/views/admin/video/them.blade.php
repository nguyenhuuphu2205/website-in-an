@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video
                    <small>Thêm</small>
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
                <form action="admin/video/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên Video (*)</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên video" required/>
                    </div>
                    <div class="form-group">
                        <label>Link Video* (Link Youtube)</label>
                        <input class="form-control" name="Link" placeholder="Nhập link youtube" required/>
                    </div>
                 

                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Nhập lại</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>


@endsection