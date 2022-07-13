<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} - Welcome </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    @include('frontend.layouts.stylesheet')
  </head>
  <body>
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
     @include('frontend.layouts.topbar')

     @include('frontend.layouts.navbar')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="assets/img/frontend/white.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5 class="text-light text-uppercase mb-3 animated slideInDown">
                      Welcome to Laundry C & F
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Login/Register to Order Laundry
                    </h1>
                    <ol class="breadcrumb mb-4 pb-2">
                      <li class="breadcrumb-item fs-5 text-light">
                       Bersih
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                        Cepat
                      </li>
                      <li class="breadcrumb-item fs-5 text-light">
                       Handal
                      </li>
                    </ol>
                    <a href="/login" class="btn btn-primary py-3 px-5"
                      >Login/Register</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev">
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next">
        </button>
      </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden ps-5 pt-5 h-100"
              style="min-height: 400px">
              <img
                class="position-absolute w-100 h-100"
                src="assets/img/frontend/about.png"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                  <h1 class="text-white">Cepat</h1>
                  <h2 class="text-white">Bersih</h2>
                  <h5 class="text-white mb-0">Wangi</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">About Us</h6>
                <h1 class="display-6 mb-0">
                  Selesaikan Seluruh Masalah Cucian-mu
                </h1>
              </div>
              <p>
                Laundry refers to the washing of clothing and other textiles, and, more broadly, 
                their drying and ironing as well. Laundry has been part of history since humans began to wear clothes,
                so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="row g-4">
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Bersih</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Cepat</h6>
                  </div>
                  <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                    <i
                      class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                    ></i>
                    <h6 class="mb-0">Handal</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->
    <!-- Facts Start -->
    <div class="container-fluid my-5 p-0">
      <div class="row g-0">
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="assets/img/frontend/login.jpg" alt="image" />
            <div class="facts-overlay">
              <h1 class="display-1">01</h1>
              <h4 class="text-white mb-3">Register</h4>
              <p class="text-white">
                Membuat akun untuk memesan layanan laundry kami
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="assets/img/frontend/order.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">02</h1>
              <h4 class="text-white mb-3">Order & Transaksi
              </h4>
              <p class="text-white">
                Order laundry sesuai keininan anda, kemudian bayar
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="assets/img/frontend/hp.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">03</h1>
              <h4 class="text-white mb-3">Check</h4>
              <p class="text-white">
                Anda bisa mengecheck dengan mudah order laundry anda dari rumah
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 wow fadeIn" data-wow-delay="0.7s">
          <div class="position-relative">
            <img class="img-fluid w-100" src="assets/img/frontend/paket.jpg" alt="" />
            <div class="facts-overlay">
              <h1 class="display-1">04</h1>
              <h4 class="text-white mb-3">Finish</h4>
              <p class="text-white">
                Laundry sudah selesai, anda bisa mengambil cucian anda kembali
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

     @include('frontend.layouts.footer')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i></a>

    @include('frontend.layouts.javascripts')
  </body>
</html>
