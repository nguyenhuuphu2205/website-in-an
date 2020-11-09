@extends('pages.layout.index')
@section('css')
<link rel="stylesheet" href="assets/css/right-menu/style.css">
@endsection
@section('content')
<main id="main" data-aos="fade-up" >

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs ">
      <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-primary pl-3"><b>{{$danhmuc->ten}}</b></h2>
          <ol>
            <li><a href="trangchu">Trang chủ</a></li>
          <li>{{$danhmuc->ten}}</li>
          </ol>
        </div>

      </div>
      
    </section><!-- End Breadcrumbs -->
    
    <section class="inner-page">
       
      <div class="container d-md-flex align-items-stretch">
        
        <!-- Page Content  -->
        <div id="content" class="p-4">
            @if(count($mayins) ==0)
            <h3>Chưa có sản phẩm</h3>
            @endif 
           
          <div class="row">
            
              @foreach($mayins as $mayin)
            <div class="col-md-4 pl-1 pr-1 pb-2">
              <div class="card" style="height: 100%">
              <img class="card-img-top" src="upload/mayin/{{$mayin->hinh_anh}}" alt="{{$mayin->ten}}" style="height: 320px; width:100%" >
                <div class="card-body mb-3">
                  <h5 class="card-title">{{$mayin->ten}}</h5>
                <p class="card-text text-danger">Liên hệ: {{$thongtinwebsite->sdt}}</p>
                <a href="may-in/{{$mayin->id}}" class="btn btn-outline-primary ">Xem chi tiết</a>
                </div>
              </div>
            </div>
            @endforeach
            
          

           

          </div>
         </div>
  
      @include('pages.layout.right-menu')
      </div>
    </section>

  </main><!-- End #main -->
@endsection
