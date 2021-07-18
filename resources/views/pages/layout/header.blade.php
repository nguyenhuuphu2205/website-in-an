 <!-- ======= Top Bar ======= -->
 <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto pt-1" style="font-size: 1rem;">
        <i class="icofont-phone"></i> Hotline: {{$thongtinwebsite->sdt}} | Zalo: {{$thongtinwebsite->zalo}}
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">{{$thongtinwebsite->email}}</a>
       
      </div>
      <form class="form-inline my-2 my-lg-0 ml-5 justify-content-end" action="tim-kiem" method="POST">
        @csrf
        <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khóa " aria-label="Search" name="tukhoa">
        <button class="btn btn-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    
    </div>
    
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <img data-src="assets/img/logo.png" width="70px" class="img-fluid lozad"/>
<h1 class="logo mr-auto"><a href="trangchu">Cường Hải<span>.</span></a> <br/> <a style="font-size: 0.8rem; color: red; text-shadow: saddlebrown;" class="d-block"><br>Hotline: {{$thongtinwebsite->sdt}}</a></h1>
      
     
    
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        
        <ul>
          <li class="active"><a href="trangchu">Trang chủ</a></li>
          <li><a href="trangchu#about">Giới thiệu</a></li>
          <li class="drop-down"><a href="#thietbi">Thiết bị</a>
            <ul>
              <li><a href="danh-muc/tat-ca">Tất cả</a></li>
              @foreach($danhmuccha as $dm)
              <li 
              @if(count($dm->danhMucCon)>0)
              class="drop-down"
              @endif
            ><a href="danh-muc/{{$dm->id}}/{{$dm->ten_khong_dau}}">{{$dm->ten}}</a>
                @if(count($dm->danhMucCon)>0)
             
                <ul>
                  @foreach($dm->danhMucCon as $d)
                  <li><a href="danh-muc/{{$d->id}}/{{$d->ten_khong_dau}}">{{$d->ten}}</a></li>
                  @endforeach
                
                </ul>
                @endif
              </li>
              @endforeach
            
            </ul>
          </li>
          <li><a href="trangchu#sanphamin">Sản phẩm in</a></li>
          <li><a href="video-san-xuat-in-an">Video</a></li>
          <li><a href="trangchu#khachhang">Khách hàng</a></li>
         
          <!-- <li><a href="#team">Thành viên</a></li> -->
         
          <li><a href="trangchu#contact">Liên hệ</a></li>

        </ul>
       
       
       
      </nav><!-- .nav-menu -->

    </div>
    
  </header><!-- End Header -->
