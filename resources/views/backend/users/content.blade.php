<div class="container">
    <a href="/dashboard/user/create" class="btn btn-primary mb-3">Tambah +</a>
    <div class="row">
      <div class="col-auto mb-2">
        <form action="/dashboard/user" method="get">
         <input type="text" name="search"/>
         <button type="submit">Search</button>
        </form>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Konsumen</th>
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
            <th scope="row">{{ $index + $data->firstItem() }}</th>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>
              <a href="/dashboard/user/detail/{{ $row->id }}" class="btn btn-success">
              <i class="fas fa-folder"></i> Detail</a>
              <a href="/dashboard/user/edit/{{ $row->id }}" class="btn btn-warning">
              <i class="fas fa-pencil-alt"></i> Edit</a>
              <a href="/dashboard/user/delete/{{ $row->id }}" class="btn btn-danger">
              <i class="fas fa-trash"></i> Delete</a>
            </td>
          </tr>  
          @endforeach
        </tbody>
      </table>
      {{ $data->links() }}
    </div>
  </div>