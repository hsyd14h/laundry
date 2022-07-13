<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} - TAKE</title>
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
     
     <div class="container-xxl py-5">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="border-start border-5 border-primary ps-4 mb-5">
                <h6 class="text-body text-uppercase mb-2">Paket Sudah Di Ambil</h6>
                <h1 class="display-6 mb-0">
                  Laundry C & F Siap Membantu Semua Masalah Cucian-Mu
                </h1>
              </div>
          </div>
        </div>
        <a href="/home" class="btn btn-secondary">Back</a>
      </div>

    @include('frontend.mainpage.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include('frontend.mainpage.javascript')
  </body>
</html>
