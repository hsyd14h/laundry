<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} - HOME </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    @include('frontend.mainpage.stylesheet')
  </head>
  <body>
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>

     @include('frontend.mainpage.navbar')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="assets/img/frontend/banner1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown">
                    Laundry Clean & Fresh
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Order Laundry Anda Sekarang
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
                    <a href="/home/order" class="btn btn-primary py-3 px-5">
                      Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="assets/img/frontend/banner2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown">
                      Laundry Clean & Fresh
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                      Order Laundry Anda Sekarang
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
                    <a href="/home/order" class="btn btn-primary py-3 px-5">
                      Order Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
              <h1 class="display-6 mb-0">
                Pelayanan Pada Laundry Kami
              </h1>
            </div>
            <div class="row gy-5 gx-4">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-3">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Fast Respons</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="d-flex align-items-center mb-3">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Profesional</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-3">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Terpercaya</h6>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="d-flex align-items-center mb-3">
                  <i
                    class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"
                  ></i>
                  <h6 class="mb-0">Handal</h6>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative overflow-hidden ps-5 pt-5 h-100"
              style="min-height: 400px">
              <img
                class="position-absolute w-100 h-100"
                src="assets/img/frontend/service.jpg"
                alt="image"
                style="object-fit: cover"/>
              <div
                class="position-absolute top-0 start-0 bg-white pe-3 pb-3"
                style="width: 200px; height: 200px">
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                  <h1 class="text-white">Cepat</h1>
                  <h2 class="text-white">Bersih</h2>
                  <h3 class="text-white">Handal</h3>
                  <h4 class="text-white mb-0">Rapi</h4>
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
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end mb-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="border-start border-5 border-primary ps-4">
              <h6 class="text-body text-uppercase mb-2">Jenis Paket</h6>
              <h1 class="display-6 mb-0">
                PAKET LAUNDRY
              </h1>
            </div>
          </div>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="assets/img/frontend/dry.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">DRY CLEANING</h5>
                <h6 class="mb-3">Rp. 20.000</h6>
                <p>
                  Pelayanan dry clean ditambah setrika dan pewangi.
                  (untuk 1-2kg)
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="assets/img/frontend/express.png" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">EXPRESS</h5>
                <h6 class="mb-3">Rp. 25.000</h6>
                <p>
                  Laundry akan dijamin cepat selesai dalam 4 jam
                  (untuk 3-4kg)
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item bg-light overflow-hidden h-100">
              <img class="img-fluid" src="assets/img/frontend/premium.jpg" alt="" />
              <div class="service-text position-relative text-center h-100 p-4">
                <h5 class="mb-3">PREMIUM</h5>
                <h6 class="mb-3">Rp. 40.000</h6>
                <p>
                  Paket dengan layanan lengkap yang kami sediakan
                  (untuk 5kg)
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

     @include('frontend.mainpage.footer')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i></a>

    @include('frontend.mainpage.javascript')
  </body>
</html>
