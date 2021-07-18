 @extends('pages.layout.index')
 @section('content')
     <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1> <span style="text-shadow: 1px 1px #1a1b1a;">CÔNG TY TNHH GIA CÔNG, THƯƠNG MẠI & DỊCH VỤ CƯỜNG HẢI</span>
      </h1>
      <h2 style=" text-shadow: 1px 1px #1a1b1a; color:red">{{$thongtinwebsite->mo_ta}}</h2>
      <div class="d-flex">
        <a href="trangchu#about" class="btn-get-started scrollto">Giới thiệu</a>
        <!-- <a href="#about" class="btn-get-started scrollto">Máy in</a> -->
        <a href="https://youtu.be/ShV1ujK-6gE" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true" > Video Sản Xuất <i class="icofont-play-alt-2"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>GIỚI THIỆU</h2>
          <h3>Về Cty Của Chúng Tôi</h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img data-src="assets/img/about.png" class="img-fluid lozad" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-primary">CÔNG TY TNHH GIA CÔNG, THƯƠNG MẠI DỊCH VỤ CƯỜNG HẢI</h3>
            <p class="font-italic">
              Là công ty chuyên cung cấp các loại máy in, máy phụ trợ, chuyên nhận in gia công trên mọi vật liệu(nhựa, thủy tinh, sứ, linh kiện điện tử ...):
            </p>
            <ul>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5>MÁY IN TAMPO (PAD)</h5>
                  <p>Với khả năng in trên mọi chất liệu và bề mặt có hình dạng không đồng đều như cong, lồi, lõm,..: nhựa, thủy tinh, gốm sứ, linh kiện điện tử, đồ chơi,..</p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5>Máy In Lưới</h5>
                  <p>In trên các vật liệu có bề mặt phẳng như: in giấy, kính, vải, túi,...; Máy in lụa tròn in trên các sản phẩm hình tròn như: chai, lọ, cốc, lọ mỹ phẩm,...</p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5> MÁY ÉP NHŨ</h5>
                  <p>Ép lên các sản phẩm như lọ, giấy, thước...và các loại máy khác.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5> MÁY PHỤ TRỢ</h5>
                  <p>Máy căng lưới, máy chụp bản, tủ sấy, máy sấy băng tải, máy sấy UV,...</p>
                </div>
              </li>
              <li>
                <i class="bx bx-printer"></i>
                <div>
                  <h5>NHẬN IN GIA CÔNG TRÊN MỌI VẬT LIỆU</h5>
                  <p>Nhựa, thủy tinh, điện thoại, sứ, gỗ....</p>
                </div>
              </li>
            </ul>
            <p class="text-justify">
              Ngoài ra công ty chúng tôi còn cung cấp các vật tư in lưới, in tampo: Mực, dao gạt mực, keo chụp bản, dung môi ... Mặt khác công ty chúng tôi còn nhận gia công căng khung chụp bản, chế bản in tampo (pad), ăn mòn các sản phẩm nhôm, inox,..
              Nhận in gia công theo yêu cầu của khách hàng.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Khách hàng hài lòng <i class="val">98%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Khách hàng thân thiết <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Đúng tiến độ <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="progress">
              <span class="skill">Trước tiến độ <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          

          </div>

        </div>

      </div>
    </section>
    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-printer"></i>
              <span data-toggle="counter-up">122</span>
              <p>Loại máy</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-paper"></i>
              <span data-toggle="counter-up">521</span>
              <p>Đơn hàng hoàn thành</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-clock-time"></i>
              <span data-toggle="counter-up">210,463</span>
              <p>Giờ sản xuất</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Nhân viên</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

   

    <section id="thietbi" class="team section-bg">
      @foreach($danhmucnoibat as $danhmuc)
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="text-secondary">THIẾT BỊ</h2>
        <h3 class="text-primary">{{$danhmuc->ten}}</h3>
        
          
        </div>

        <div class="row">
          <?php 
          $i=0;
          ?>
          @foreach($danhmuc->mayIn as $may)
          <?php 
          if($i==4){
          break;
          }
          $i++;
          ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" >
            <div class="member">
              <div class="member-img" >
              <img data-src="upload/mayin/{{$may->hinh_anh}}" class="img-fluid lozad" alt="{{$may->ten_khong_dau}}" style="height: 300px; width:100%">
                <div class="social">
                 
                  <a href="may-in/{{$may->id}}/{{$may->ten_khong_dau}}"><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info " >
                <h4>{{$may->ten}}</h4>
              <a href="may-in/{{$may->id}}/{{$may->ten_khong_dau}}">Xem chi tiết</a>
              </div>
            </div>
          </div>
        @endforeach


         

        </div>
        <div class="row justify-content-center">
          <p class=""><a href="danh-muc/{{$danhmuc->id}}/{{$danhmuc->ten_khong_dau}}" class="text-danger">Xem thêm</a></p>
        </div>
        <hr>
        

      </div>
      @endforeach
      {{-- <div class="container" data-aos="fade-up">

        <div class="section-title">
        
          <h3 class="text-primary">Máy In TAMPO</h3>
        
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/printer/may5.png" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4>Máy in tampo 8 màu bán tự động</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/printer/may6.png" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4 >máy in tampo đa chức năng 16 màu băng tải</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/printer/may7.png" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4 >Máy in tampo 2 màu băng tải</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/printer/may8.png" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4 >Máy in Tampo 8 màu đa chức năng</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>

         

        </div>
        <div class="row justify-content-center">
          <p class=""><a href="#" class="text-danger">Xem thêm</a></p>
        </div>
        <hr>
        

      </div>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        
          <h3 class="text-primary">Vật Tư In Đặc Chủng</h3>
        
          
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/vat-tu/vat-tu-1.jpg" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4>Mực In</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/vat-tu/vat-tu-2.jpg" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4 >Dung môi in</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/vat-tu/vat-tu-3.jpg" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4 >Lưỡi dao gạt mực</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/vat-tu/vat-tu-4.jpg" class="img-fluid" alt="">
                <div class="social">
                 
                  <a href=""><i class="icofont-info"></i></a>

                </div>
              </div>
              <div class="member-info ">
                <h4 >Lưới (lụa)</h4>
               <a href="#">Xem chi tiết</a>
              </div>
            </div>
          </div>

         

        </div>
        <div class="row justify-content-center">
          <p class=""><a href="#" class="text-danger">Xem thêm</a></p>
        </div>
        <hr>
        

      </div> --}}
    </section><!-- End Team Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="sanphamin" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2 class="text-secondary">Gia Công</h2>
            <h3 class="text-primary">Nhận In Gia Công Vật Liệu</h3>
            <p>Các sản phẩm đã in gia công của chúng tôi cho các khách hàng.</p>
          </div>
  
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">Tất cả</li>
                @foreach($vatlieuins as $vatlieu)
              <li data-filter=".filter-{{$vatlieu->id}}">{{$vatlieu->ten}}</li>
                @endforeach
                {{-- <li data-filter=".filter-card">Sứ</li>
                <li data-filter=".filter-web">Kim Loại</li> --}}
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php 
              $count_san_pham_in =0
              ?>
            @foreach($vatlieuins as $vatlieu)
              @foreach($vatlieu->sanPhamIn as $sp)
              <?php
              if($count_san_pham_in ==3){
              break;
              }
              $count_san_pham_in ++;
              ?>
              <div class="col-lg-4 col-md-6 portfolio-item filter-{{$vatlieu->id}} ">
              <img data-src="upload/sanphamin/{{$sp->hinh_anh}}"  class="lozad" width="100%" height="450px">
                <div class="portfolio-info">
               <div>
                <h4>{{$sp->ten}}</h4>
                 </div>
                  <a href="upload/sanphamin/{{$sp->hinh_anh}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-zoom-in"></i></a>
                  <a href="san-pham-in/{{$sp->id}}/{{$sp->ten_khong_dau}}" class="details-link" title="More Details"><i class="bx bx-info-circle"></i></a>
                </div>
              </div>

              @endforeach
            @endforeach
         
  
  
      
  
          </div>
          <div class="row justify-content-center">
            <p class=""><a href="vat-lieu-in/tat-ca" class="text-danger">Xem thêm</a></p>
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="khachhang" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img data-src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img lozad" alt="">
            <h3>Hồng Phước</h3>
            <h4>Ceo &amp; Founder Cpro VN</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Chúng tôi rất hài lòng với chất lượng sản phẩm và dịch vụ của công ty. Công ty làm việc rất chuyên nghiệp. Chúng tôi rất hài lòng về các thiết bị máy in của công ty.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img data-src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img lozad" alt="">
            <h3>Nguyễn Phan</h3>
            <h4>CEO Fortune Host</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Tiến độ in của công ty rất nhanh, chất lượng vượt ngoài mong đợi. Màu sắc in rất rõ nét. Sẽ thường xuyên hợp tác với công ty.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>


        </div>

      </div>
    </section><!-- End Testimonials Section -->

     <!-- ======= Clients Section ======= -->
     <section  class="clients section-bg">
      <div class="container" data-aos="zoom-in">
        <div class="section-title">
          <h2>Đối Tác</h2>
        
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
          
            <img data-src="assets/img/company/cpro.png" class="img-fluid lozad" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img data-src="assets/img/company/fhf.png" class="img-fluid lozad" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img data-src="assets/img/company/youwei.png" class="img-fluid lozad" alt="">
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img data-src="assets/img/company/dmtech.png" class="img-fluid lozad" alt="">
          </div>


        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>LIÊN HỆ</h2>
          <h3><span>Thông Tin Liên Hệ</span></h3>
          <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Địa chỉ</h3>
              <p>Khu liền kề KCN Quế Võ, Thôn Hà Liễu, Xã Phương Liễu, Quế Võ, Bắc Ninh</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <p>nguyenduycuong261286@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>SĐT</h3>
              <p>0865.028.656</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            
            <iframe class="mb-4 mb-lg-0 lozad" data-src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1315.8450543415663!2d106.0769261522784!3d21.121660436172984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1604543905211!5m2!1svi!2s" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nhập tên của bạn" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="SĐT" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Chủ đề" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Nhập nội dung câu hỏi"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Gửi câu hỏi</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    

  </main><!-- End #main -->
 @endsection
 
 