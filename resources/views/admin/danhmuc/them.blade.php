@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh Mục Sản Phẩm
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
                <form action="admin/danhmuc/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Danh mục cha</label>
                        <select class="form-control" name="danh_muc_cha">
                            <option value="-1">Không có danh mục cha</option>
                            @foreach($danhmucs as $dm)
                                <option value="{{$dm->id}}">{{$dm -> ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tên Danh Mục</label>
                        <input class="form-control" name="Ten" placeholder="Nhập tên danh mục" required/>
                    </div>
                    <div class="form-group">
                        <label>Nổi bật</label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="0" type="radio" checked="">Không nổi bật
                        </label>
                        <label class="radio-inline">
                            <input name="NoiBat" value="1" type="radio" >Nổi bật
                        </label>
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