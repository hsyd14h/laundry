<div class="container">
    <div class="col-auto">
   <a href="/dashboard/exportexcel" class="btn btn-success mb-2">Export Excel</a>
   <br/>
    </div>  
     {{-- <form action="{{ url('/dashboard/report') }}" method="get">
        <input type="text" name="keyword"/>
        <button type="submit">Search</button>
        <br/><br/>
    </form> --}}
    <div class="row">
        @if ($data->count() >= 1)
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
            <th scope="col">Aksi</th>
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
            <td>
                <a href="/dashboard/report/edit/{{ $row->id }}" class="btn btn-warning">
                <i class="fas fa-pencil-alt"></i></a>
                <a href="/dashboard/report/detail/{{ $row->id }}" class="btn btn-primary">
                <i class="fas fa-folder"></i></a>
                <a href="/dashboard/report/delete/{{ $row->id }}" class="btn btn-danger">
                <i class="fas fa-trash"></i> </a>
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


