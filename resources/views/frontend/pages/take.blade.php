<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} - TAKE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    @include('frontend.mainpage.stylesheet')
  </head>
  <body>
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
    </div>

     @include('frontend.mainpage.navbar')   
     
     <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
               <div class="card-body">
                    <div class="mb-3">
                      <label for="code_order" class="form-label">Kode Laundry</label>
                      <input id="code_order" name="search" type="text" class="form-control" placeholder="Masukkan Kode Laundry...."/>
                  </div>
                     <a href="/home/take/laundry" class="btn btn-warning" onclick="contoh()">Ambil Paket</a>
               </div>
              </div>
          </div>
         </div>
       </div>

    @include('frontend.mainpage.footer')
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include('frontend.mainpage.javascript')

    <script type="text/javascript">
        function contoh() {

           swal({

                title: "Paket Sudah Diambil!",

                text: "Terimakasih Sudah Menggunakan Pelayanan Kami",

                icon: "success",

                button: true

            });

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  </body>
</html>
