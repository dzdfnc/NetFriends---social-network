@extends('layouts.app')

@section('content')
<div class="row content-main">

  <div class="col-lg-6">
    <h3>Friends</h3>

    @if ( ! $friends->count() )
        <p>You have no friends</p>
    @else
        @foreach ($friends as $user)

          @include('user.partials.userblock')

        @endforeach
    @endif
  </div>

  <div class="col-lg-6">
    <h3>Friend requests</h3>

    @if ( ! $requests->count() )
        <p> You have no friend requests.</p>
    @else
        @foreach ($requests as $user)

          @include('user.partials.userblock')

        @endforeach
    @endif
  </div>

</div>
@endsection
