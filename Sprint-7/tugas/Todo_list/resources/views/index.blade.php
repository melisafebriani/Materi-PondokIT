@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</a>
                <a href="/todo/index">Lihat Todolist</a>
            </div>
        </div>
    </div>
</div>
@endsection
