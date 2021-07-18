  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4 class="text-primary">Đăng ký nhận chương trình khuyến mại</h4>
            <!-- <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
            <form action="" method="post">
              <input type="email" name="email" placeholder="Nhập email"><input type="submit" value="Đăng ký">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top ">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img data-src="assets/img/logo.png" width="90px" class="img-fluid d-inline lozad"/>
            <h3 class="d-inline">CƯỜNG HẢI<span>.</span></h3>
          <p class="border-bottom font-weight-bold">{{$thongtinwebsite->mo_ta}}</p>
            <p>
              <br>
              <strong>Địa chỉ</strong>: {{$thongtinwebsite->dia_chi}} <br>
	      <strong>SĐT:</strong> {{$thongtinwebsite->sdt}}<br>
		<strong>Zalo:</strong> {{$thongtinwebsite->zalo}}<br>
              <strong>Email:</strong>{{$thongtinwebsite->email}}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>LIÊN KẾT NHANH</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="trangchu">Trang chủ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trangchu#about">Giới thiệu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="danh-muc/tat-ca">Thiết bị</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trangchu#sanphamin">Sản phẩm in</a></li>
	      <li><i class="bx bx-chevron-right"></i> <a href="trangchu#khachhang">Khách hàng</a></li>
		 <li><i class="bx bx-chevron-right"></i> <a href="video-san-xuat-in-an">Video</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="trangchu#contact">Liên hệ</a></li>
              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>DANH MỤC</h4>
            <ul>
            @foreach($danhmuccha as $dm)
            <li><i class="bx bx-chevron-right"></i> <a href="danh-muc/{{$dm->id}}/{{$dm->ten_khong_dau}}">{{$dm->ten}}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>LIÊN KẾT MẠNG XÃ HỘI</h4>
            <p>Kết nối với chúng tôi trên các mạng xã hội</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Cường Hải</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="#">2020</a>
      </div>
    </div>

       <!-- Icon call phone -->
       <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
                <a href="tel:{{$thongtinwebsite->sdt}}" class="pps-btn-img">
                    <img data-src="assets/img/icon-call-nh.png" class="lozad" alt="Gọi điện thoại" width="50">
                </a>
            </div>
        </div>
        <div class="hotline-bar">
            <a href="tel:{{$thongtinwebsite->sdt}}">
                <span class="text-hotline">{{$thongtinwebsite->sdt}}</span>
            </a>
        </div>
    </div>
    <!-- end div -->
  </footer><!-- End Footer -->
