@extends('auth.layouts.index')

@section('title','Login')
@section('content')
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
      <div class="login-brand">
        <img src="/stisla/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
      </div>

      <div class="card card-primary">
        <div class="card-header"><h4>Login</h4></div>

        <div class="card-body">
          <form method="POST" action="{{route('login')}}" class="needs-validation" novalidate="">
          @csrf
            @method('POST')
            <div class="form-group">
              <label for="phone">Number Phone</label>
              <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" tabindex="1" required autofocus {{old('phone')}}>
  
              @error('phone')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <div class="d-block">
                <label for="password" class="control-label">Password</label>
                <div class="float-right">
                  <a href="auth-forgot-password.html" class="text-small">
                    Forgot Password?
                  </a>
                </div>
              </div>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required {{old('password')}}>
              
              @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" {{old('remember') ? 'checked' : ''}}>
                <label class="custom-control-label" for="remember-me">Remember Me</label>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                Login
              </button>
            </div>
          </form>

        </div>
      </div>
      <div class="mt-5 text-muted text-center">
        Don't have an account? <a href="auth-register.html">Create One</a>
      </div>
      <div class="simple-footer">
        Copyright &copy; Stisla 2018
      </div>
    </div>
  </div>
@endsection