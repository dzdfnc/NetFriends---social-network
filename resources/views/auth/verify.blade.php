@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mt-3">
      <div class="card">
        <div class="card-header">Check your email address</div>

        <div class="card-body">
          @if ( session('resent') )
            <div class="alert alert-success" role="alert">
                A verification link has been sent to your email address.
            </div>
          @endif

              Please check your email for the confirmation link before proceeding.
              If you have not received the letter,
          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
            Resend</button>.
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
