<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $jumlah_user }}</h3>

              <p>Jumlah User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="/dashboard/user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $jumlah_order }}</h3>

              <p>Order Masuk</p>
            </div>
            <div class="icon">
              <i class="ion ion-archive"></i>
            </div>
            <a href="/dashboard/order" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $jumlah_paket }}</h3>

              <p>Jumlah Paket</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
            <a href="/dashboard/package" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>

      
      <!-- Main row -->
      <div class="row">
        @if ($data->count() >= 1)
        
        <div class="alert alert-info" role="alert">
            List Order Baru  
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Code Order</th>
              <th scope="col">Tgl.Order</th>
              <th scope="col">Paket</th>
              <th scope="col">Nama</th>
              <th scope="col">No.Telp</th>
              <th scope="col">Alamat</th>
              <th scope="col">Total Harga</th>
              <th scope="col">Status</th>
            </tr>
            </tr>
          </thead>
          <tbody>
          @foreach ($data as $row)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>   
              <td>{{ $row->code_order }}</td>
              <td>{{ $row->date_drop_laundry }}</td>
              <td>{{ $row->package_id }}</td>
              <td>{{ $row->user_name }}</td>
              <td>{{ $row->user_phone }}</td>
              <td>{{ $row->address }}</td>
              <td>{{ $row->total_price }}</td>
              <td class="project-state">
                  <span class="badge badge-success">{{ $row->status}}</span>
              </td>
            </tr>
            @endforeach
          </tbody>   
        </table>
        @else
        <div class="alert alert-info" role="alert">
           Anda Tidak Memiliki Order Baru
        </div>
        @endif

        <section class="col-lg-7 connectedSortable">
        </section>
        <section class="col-lg-5 connectedSortable">
        </section>
      </div>
    </div>
  </section>