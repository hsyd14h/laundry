@extends('backend.layouts.backend_dashboard.app')

@section('title')  
     <h1>Add Order</h1>
@endsection 

@section('breadcrumbs')
    Add 
@endsection    

@section('content')
      <?php
      date_default_timezone_set('Asia/Jakarta');
      $date_drop_laundry = date('Y-m-d');
      ?>
 <div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
         <div class="card-body">
            <form method="POST" action="{{ url('/dashboard/order/insertdata') }}">
              @csrf
              <div class="mb-3">
                <label class="form-label">Code Order</label>
                <input id="code_order" name="code_order" type="text" class="form-control" value="code_order"/>
             </div>
              <div class="mb-3">
                <label for="date_drop_laundry" class="form-label">Tgl.Order</label>
                <input name="date_drop_laundry" type="text" value="<?= $date_drop_laundry;?>" class="form-control"  placeholder="Tgl.Order" readonly/>
             </div>
             <div class="form-group">
              <label for="inputpackage_id">Paket</label>
              <select id="inputpackage_id" data-placeholder="--Select one--" class="form-control custom-select">
                <option selected disabled>--Select one--</option>
                    <option>Express</option>
                    <option>Dry Cleaning</option>
                    <option>Premium</option>
              </select>
             </div>
              <div class="mb-3">
                <label for="user_name" class="form-label">Nama</label>
                <input id="user_name" name="user_name" type="text" class="form-control" value="user_name" placeholder="Masukkan Nama ..."/>
                    @error('user_name')
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
                <input id="input_orders_laundry_total_price" name="total_price" type="text" class="form-control"/>
                    @error('total_price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
               </div>
              <div class="form-group">
                  <label for="inputStatus">Status</label>
                  <select id="inputStatus" class="form-control custom-select">
                    <option selected disabled>--Select one--</option>
                    <option>Dalam Proses</option>
                    <option>Proses</option>
                    <option>Selesai</option>
                  </select>
              </div>
               <button type="submit" class="btn btn-primary float-right">Create</button>
               <a href="/dashboard/order" class="btn btn-secondary">Back</a>
             </form>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
</script> --}}
@endsection 
