@extends('layout.main')

@section('title', 'Form Ubah Todo')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Form Ubah Todo</h1>

          <form method="post" action="{{url('todo', $todo->id)}}">
          {{ csrf_field() }} {{ method_field('PUT')}}
            
            <input type="hidden" name="id" value="{{$todo->id}}">
            
            <div class="form-group">
              <input type="text" class="form-control @error('tugas') is-invalid @enderror" id="tugas" name="tugas" value="{{$todo->tugas}}">
                @error('tugas')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary"> Ubah </button>
          </form>
        </div>
      </div>
    </div>
@endsection