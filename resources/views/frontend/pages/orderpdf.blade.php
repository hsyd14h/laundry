<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} - PRINT ORDER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('frontend.mainpage.stylesheet')

  </head>
  <body>
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
  <div class="row">
      <div class="col-lg-7">
          <div class="card sub2">
              <div class="card-body">
                  <div class="kop_nota">
                      <table width="100%">
                          <tr>
                              <td rowspan="2" width="30%"><img src="{{ asset('assets/img/backend/logo.png') }}" alt="" width="140" height="140"></td>
                              <td class="sub1"><b>LAUNDRY CLEAN & FRESH CLEANING SERVICE</b></td>
                          </tr>
                          <tr>
                              <td>
                                  Prefektur Tokyo / Bunkyo-ku / Honkomagome / Distrik 2 / Blok 28<br>
                                  Siap Membantu Semua Masalah Cucian Kamu<br>
                                  IG    : @ D-Laundry<br>
                                  Hp. 085 932 3214<br>
                                  <b>WA : 085 932 3214</b><br>
                              </td>
                          </tr>
                      </table>
                  </div>
                  <hr>
                  <div class="wrapper">
                    <div class="invoice p-3 mb-3">
                          <div class="row">
                                 <div class="col-12">
                                   <h4>
                                     <small class="float-right">Date: {{$data->date_drop_laundry}}</small>
                                   </h4>
                                 </div>
                               </div>
                              <div class="table-responsive">
                                <table class="table">
                                  <tr>
                                    <th style="width:50%">User Name</th>
                                    <td>{{$data->user_name}}</td>
                                  </tr>
                                  <tr>
                                    <th>User Phone</th>
                                    <td>+62{{$data->user_phone}}</td>
                                  </tr>
                                  <tr>
                                    <th>User Address</th>
                                    <td>{{$data->address}}</td>
                                  </tr>
                                  <tr>
                                    <th>Code Order</th>
                                    <td>{{$data->code_order}}</td>
                                  </tr>
                                  <tr>
                                    <th>Pilihan Paket</th>
                                    <td>{{$data->name}}</td>
                                  </tr>
                                  <tr>
                                    <th>Total Price</th>
                                    <td>{{$data->total_price}}</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                         
                  <div class="ttd" style="font-size:15px; padding-top: 1rem;">
                      <b>Hormat Kami,</b><br>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>  
     
         <script type="text/javascript">
           window.addEventListener("load", window.print());
         </script>
         
    @include('frontend.mainpage.javascript')
  </body>
  </html>


























{{-- <a href="/home" type="submit" class="btn btn-primary float-left" style="margin-left: 5px;">Back</a> --}}




{{-- <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Cetak Nota</h6>
            <h1 class="display-6 mb-0">
             Laundry C & F Siap Membantu Semua Masalah Cucian-Mu
            </h1>
          </div>
          
        </div>
        <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <form action="{{ route('cetakNota') }}" method="POST">
            @csrf
            <p class="mb-4">
                Silahkan Cetak Nota Bukti Pembayaran anda Disini.
                Nb. Serahkan Nota Bukti Pembayaran ini di counter laundry.
              </p>
              <div class="col-12">
                <a href="#" class="btn btn-primary w-100 py-3 mb-3">
                    Print Nota
                </a>
                <a href="/home" class="btn btn-secondary w-100 py-3">
                   <<  Kembali Ke Halaman Utama
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> --}}