@extends('layouts.app')

@section('content')
<div class="row content-main0">
  <div class="col-lg-6 card card-body mx-auto">

    <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab"
          data-toggle="tab" href="#home" role="tab"
          aria-controls="home" aria-selected="true">Main Info</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home"
           role="tabpanel" aria-labelledby="home-tab">

          <form method="POST" action="{{ route('profile.edit') }}"
                class="needs-validation" novalidate>
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                    <input type="text"
                           name="first_name"
                           class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                           placeholder="First name"
                           value="{{ Request::old('first_name') ?: Auth::user()->first_name }}">

                    @if ( $errors->has('first_name') )
                      <span class="invalid-feedback">
                        {{ $errors->first('first_name') }}
                      </span>
                    @endif
                </div>

                <div class="form-group">
                    <input type="text"
                           name="last_name"
                           class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                           placeholder="Last name"
                           value="{{ Request::old('last_name') ?: Auth::user()->last_name }}">

                    @if ( $errors->has('last_name') )
                      <span class="invalid-feedback">
                        {{ $errors->first('last_name') }}
                      </span>
                    @endif
                </div>


              </div>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
          </form>
      </div>

    </div>

  </div>
</div>
@endsection
