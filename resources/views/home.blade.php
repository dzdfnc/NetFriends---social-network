@extends('layouts.app')

@section('content')
<div class="row">

  <div class="col-lg-6 mt-3 text-center">
    <div class="apps-block">
      <div class="app-block">
      </div>
    </div>
  </div>
  <div class="offset-lg-2 col-lg-4 mt-3">
    <div class="row">
      <div class="card card-body">
        @include('auth.parts.form-login')
      </div>
    </div>

    <div class="row mt-3">
      <div class="card card-body">
        @include('auth.parts.form-register')
      </div>
    </div>
  </div>

</div>
@endsection
