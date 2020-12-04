@extends('layout.main')

@section('title', 'Detail')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1 class="mt-3">Detail Mahasiswa</h1>



      <!--   <table>
       
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
             
                <label class="form-check-label" for="defaultCheck1">
                  {{ $student->jurusan }}
                </label>
             
            </div>

             <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
             
                <label class="form-check-label" for="defaultCheck1">
                  {{ $student->jurusan }}
                </
                





          <div class="card" style="">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
                <p class="card-text">{{ $student->email }}</p>
                <p class="card-text">{{ $student->jurusan }}</p>

                  <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                  <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form> 
                  <a href="/students" class="card-link">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

