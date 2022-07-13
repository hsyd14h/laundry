<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title> {{ config('app.name') }} - ORDER</title>
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

     <section>  
     <?php
     date_default_timezone_set('Asia/Jakarta');
     $date_drop_laundry = date('Y-m-d');
     ?>
<div class="container">
 <div class="row">
   <div class="col-12">
     <div class="card">
        <div class="card-body">
           <form method="POST" action="{{ url('/home/order') }}">
             @csrf
             <div class="mb-3">
               <label class="form-label">Code Order</label>
               <input id="code_order" name="code_order" type="text" class="form-control" value="{{ $row }}" readonly/>
            </div>
             <div class="mb-3">
               <label for="date_drop_laundry" class="form-label">Tgl.Order</label>
               <input name="date_drop_laundry" type="text" value="<?= $date_drop_laundry;?>" class="form-control"  placeholder="Tgl.Order" readonly/>
            </div>
            <div class="inputSelect mb-3">
             <label for="inputpackage_id">Paket</label>
             <select name="package_id" id="package_id" onclick="harga();" required>
               <option selected disabled>--Select one--</option>
               @foreach ($package as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
               @endforeach
             </select>
            </div>
             <div class="mb-3">
               <label for="user_name" class="form-label">Nama</label>
               <input id="user_name" name="user_name" type="text" class="form-control" placeholder="Masukkan Nama ..."/>
                   @error('user_phone')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
              </div>
             <div class="mb-3">
               <label for="input_orders_laundry_user_phone" class="form-label">No Handphone</label>
               <input id="input_orders_laundry_user_phone" name="user_phone" type="text" class="form-control" placeholder="Masukkan Nomor ..."/>
                   @error('user_phone')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
              </div>
             <div class="mb-3">
               <label for="input_orders_laundry_address" class="form-label">Alamat</label>
               <input id="input_orders_laundry_address" name="address" type="text" class="form-control" placeholder="Masukkan Alamat..."/>
                   @error('address')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
              </div>
              <div class="mb-3">
                <label for="input_orders_laundry_total_price" class="form-label">Total Harga</label>
                <input id="total_price" name="total_price" type="text" class="form-control" readonly/>
                    @error('total_price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
               </div>
              <a href="/home" class="btn btn-secondary">Back</a>
              <button type="submit" class="btn btn-primary float-right">Create</button>
            </form>
        </section>    
            
       </div>
     </div>
   </div>
 </div>
</div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    @include('frontend.mainpage.javascript')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script type="text/javascript">
                function harga(){
                    iddd = $("#package_id").val();
                    // console.log(iddd);
                    if (iddd==''){
                        $('#total_price').val('');
                    }
                    $.ajax({
                        url:"{{ route('cari') }}",
                        type:"GET",
                        dataType:"json",
                        data:{
                            package_id:$("#package_id").val()
                        },
                        success:function(hasil){
                            if (hasil.val==0) {
                                // alert('Data tidak ditemukan');
                                $('#total_price').val('');

                            }else if(hasil.val==2){
                                // alert('Data tidak ditemukan 2');
                                $('#total_price').val('');

                            }else{
                                // alert('Data tidak ditemukan 3');
                                $('#total_price').val(hasil.data.price);
                            }
                        }
                    });
                }
            </script>
  </body>
</html>
