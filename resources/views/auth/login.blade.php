@extends('layouts.master')

@section('content')
            <div class="card">
                  <div class="login-box">
                   
                    <!-- /.login-logo -->
                    <div class="card-body">
                        <div class="card-header text-center">
                          <a href="../../index2.html" class="h1"><b>SPJ</b>Diskominfo</a>
                        </div>
                        <form action="{{ url('/dasbor') }}" aria-label="{{ __('Login') }}">
                          @csrf

                          <div class="input-group mb-3">
                              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                   
                              <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                  </div>
                              </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif     
                          </div>
                          <div class="input-group mb-3">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>      
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                  </div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif  
                          </div>
                          <div class="row">
                            <div class="col-8">
                              <div class="icheck-primary">
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                  Ingatkan saya
                                </label>
                              </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                            </div>
                            <!-- /.col -->
                          </div>
                        </form>


                        <p class="mb-1">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        </p>
                    </div>
                  </div>
            </div>
@endsection
