<html>
    <head>
        <link rel="stylesheet" href="{{asset('css/sb-admin-2.min.css')}}">
    </head>

    <body>
        <body class="bg-gradient-primary">

            <div class="container">
          
              <!-- Outer Row -->
              <div class="row justify-content-center">
          
                <div class="col-xl-10 col-lg-12 col-md-9">
          
                  <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                      @if (session('status'))
                          <div class="alert alert-success">
                            {{ session('status') }}
                          </div>
                        @endif
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                          <div class="p-5">
                            <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Login Form</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                            @csrf    
                              <div class="form-group"> {{--email--}}
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control form-control-user" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus aria-describedby="emailHelp" placeholder="Enter Email Address...">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror  
                              </div>

                              <div class="form-group"> {{--password--}}
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control form-control-user" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                              </div>

                              <div class="form-group"> {{--remember me--}}
                                <div class="custom-control custom-checkbox small">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck">{{ __('Remember Me') }}</label>
                                </div>
                              </div>

                              <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-user btn-block">{{ __('Login') }}</button>   
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                              </div>

                              <hr>
                            </form>

                            <hr>

                            <div class="text-center">
                                <a type="submit" class="small">
                                    {{ __('Login') }}
                                </a>   
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="text-center">
                              <a class="small" href="#">Create an Account!</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                </div>
          
              </div>
          
            </div>
          
            <!-- Bootstrap core JavaScript-->
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
          
            <!-- Core plugin JavaScript-->
            <script src="{{asset('js/jquery.easing.min.js')}}"></script>
          
            <!-- Custom scripts for all pages-->
            <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
          
          </body>
    </body>
</html>