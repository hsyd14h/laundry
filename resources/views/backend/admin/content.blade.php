<div class="container">
    <a href="/dashboard/admin/create" class="btn btn-primary mb-3">Tambah +</a>
    <div class="row g-3 align-items-center">
        <div class="col-auto mb-2">
            <form action="/dashboard/admin" method="get">
             <input type="text" name="search"/>
             <button type="submit">Search</button>
            </form>
          </div>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Image</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             @php
                 $id = 1;
             @endphp
                @foreach ($data as $index => $row)
                <tr>
                  <th scope="row">{{ $index  + $data->firstItem() }}</th>
                  <td>{{ $row->name }}</td>
                  <td>
                    <img src="{{ asset('image/'.$row->image) }}" alt="" style="width: 40px;">
                  </td>
                  <td>{{ $row->email }}</td>
                  <td>
                          <a href="/dashboard/admin/detail/{{ $row->id }}" class="btn btn-success">
                          <i class="fas fa-folder"></i> Detail</a>
                          <a href="/dashboard/admin/edit/{{ $row->id }}" class="btn btn-warning">
                          <i class="fas fa-pencil-alt"></i> Edit</a>
                          <a href="/dashboard/admin/delete/{{ $row->id }}" class="btn btn-danger">
                          <i class="fas fa-trash"></i> Delete</a>
                  </td>
                </tr> 
                @endforeach
            </tbody>
          </table>
          {{ $data->links() }}
    </div>
</div>