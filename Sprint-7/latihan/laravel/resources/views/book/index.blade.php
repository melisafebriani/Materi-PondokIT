@extends('layout.main')

@section('title', 'Data Buku')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Data Buku</h1>
          <table class="table">
            <table class="table">
                  <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Buku</th>
                                  <th scope="col">Tipe Buku</th>
                                  <th scope="col">Stock Buku</th>
                                  <th scope="col">Penulis</th>
                                  <th scope="col">Penerbit</th>
                                  <th scope="col">Tanggal Terbit</th>
                                  <th scope="col">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($books as $bbk)
                                <tr>
                                  <th scope="row">{{ $loop->iteration }}</th>
                                  <td>{{ $bbk->nama_buku }}</td>
                                  <td>{{ $bbk->tipe_buku }}</td>
                                  <td>{{ $bbk->stock_buku }}</td>
                                  <td>{{ $bbk->penulis }}</td>
                                  <td>{{ $bbk->penerbit  }}</td>
                                  <td>{{ $bbk->tanggal_terbit }}</td>
                                  <td>
                                    <a href="">Edit | </a>
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
@endsection

