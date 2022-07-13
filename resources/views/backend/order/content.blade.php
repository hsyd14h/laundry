<div class="container">
  <a href="/dashboard/order/create" class="btn btn-primary mb-3">Tambah +</a>
    <div class="row g-3 align-items-center">
      <div class="col-auto mb-2">
        <form action="/dashboard/order" method="get">
         <input type="text" name="search"/>
         <button type="submit">Search</button>
        </form>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Code Order</th>
            <th scope="col">Tgl.Order</th>
            <th scope="col">Paket</th>
            <th scope="col">Nama</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $index => $row)
          <tr>
            <th scope="row">{{ $index + $data->firstItem() }}</th>   
            <td>{{ $row->code_order }}</td>
            <td>{{ ($row->date_drop_laundry) }}</td>
            <td>{{ $row->package_id }}</td>
            <td>{{ $row->user_name }}</td>
            <td>{{ $row->total_price }}</td>
            <td class="project-state">
                <span class="badge badge-success">{{ $row->status}}</span>
            </td>
            <td>
              <a href="/dashboard/order/edit/{{ $row->id }}" class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i></a>
              <a href="/dashboard/order/delete/{{ $row->id }}" class="btn btn-danger">
              <i class="fas fa-trash"></i> </a>
              <a href="/dashboard/order/detail/{{ $row->id }}" class="btn btn-primary">
              <i class="fas fa-folder"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>   
      </table>
      {{ $data->links() }}
    </div>
  </div>
