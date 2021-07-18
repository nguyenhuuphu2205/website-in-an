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
          <h2 class="text-primary pl-3"><b>Thư Viện Video</b></h2>
          <ol>
            <li><a href="trangchu">Trang chủ</a></li>
          <li>Video</li>
          </ol>
        </div>

      </div>
      
    </section><!-- End Breadcrumbs -->
    
    <section class="inner-page" style="margin-top: -50px">
       
      <div class="container d-md-flex align-items-stretch">
        
        <!-- Page Content  -->
        <div id="content" class="p-4">
            @if(count($videos) ==0)
            <h3>Không có video</h3>
            @endif 
           
          <div class="row">
            
              @foreach($videos as $video)
            <div class="col-md-6 pl-1 pr-1 pb-2">
              <div class="card" style="height: 100%">
                <?php 
                $code_embed_array = explode("/", $video->link); 
                $code_embed = end($code_embed_array);
                ?>
                 <iframe  class="lozad" width="100%" height="320px" data-src="https://www.youtube.com/embed/{{$code_embed}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body mb-3 justify-content-center">
                  <h5 class="card-title text-center">{{$video->ten}}</h5>
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