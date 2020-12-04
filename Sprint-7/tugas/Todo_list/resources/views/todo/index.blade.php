 @extends('layout.main')

 @section('title', 'TodoList')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Todolist</h1>
    </div>
  </div>
</div>

  @include('layout.patrials.alerts')


<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Todolist</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ( $todo as $todos )
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $todos->tugas }}</td>

      <td>
        <form class="d-inline">
          <a href="/todo/{{ $todos->id }}/edit" class="btn btn-primary">edit</a>
         </form>

          <form action="/todo/{{ $todos->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </td>

    </tr>
  </tbody>
  @endforeach
</table>
      <a href="/todo/create" class="btn btn-primary my-2"> Tambah </a>
      <a href="/todo" class="btn btn-success my-2"> Simpan </a>

</div>
@endsection




