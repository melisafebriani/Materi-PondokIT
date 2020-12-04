@extends('layout.main')

@section('title', 'Form Tambah Todo')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Form Tambah Todo</h1>
          <form method="post" action="/todo">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control @error('tugas') is-invalid @enderror" id="tugas" placeholder="Input todolist" name="tugas">
                @error('tugas')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary"> tambah </button>
          </form>
        </div>
      </div>
    </div>
@endsection