<form method="POST" action="{{ route('login') }}"
      class="needs-validation" novalidate>
  @csrf

  <div class="form-group">
    <input type="email"
           name="email"
           class="form-control @error('email') is-invalid @enderror"
           autofocus
           placeholder="Email"
           value="{{ old('email') }}">

    @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
  </div>

  <div class="form-group">
    <input type="password"
           name="password"
           class="form-control @error('password') is-invalid @enderror"
           placeholder="Password">

    @error('password')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
    @enderror
  </div>

  <div class="custom-control custom-checkbox mb-3">
    <input name="remember"
           type="checkbox"
           class="custom-control-input"
           id="remember"
           {{ old('remember') ? 'checked' : '' }}>
    <label class="custom-control-label text-secondary"
           for="remember">Remember</label>
  </div>

  <button type="submit" class="btn btn-primary btn-block">Log in</button>

  @if ( Route::has('password.request') )
    <a class="btn btn-link"
       href="{{ route('password.request') }}">
       Forgot your password?
    </a>
  @endif
</form>
