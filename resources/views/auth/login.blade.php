@extends('user.layout.default')
@section('content')
    <div class="container-fluid pl-0">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div class="signup-logo-side" style="background-image: url('{{asset('img/Sentiment.jpg')}}')">

                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-6 px-2 px-sm-5  py-5 ">
                <div class="signup-form-side mx-2 mx-lg-1 mx-xl-5 my-5 text-center">
                    <div class="login-logo d-flex justify-content-center mx-auto">
                        <img src="{{asset('/img/logo.png')}}" />
                    </div>
                    <h2>Welcome Back!</h2>
                    <p>Login with your Account Details</p>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-4">
                            {{-- <input type="email" class="form-control"  placeholder="Enter email"> --}}

                                <input id="email" type="email" id="exampleInputEmail1"  placeholder="Enter email" aria-describedby="emailHelp" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                        </div>
                        <div class="form-group mt-4">
                            {{-- <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password"> --}}

                                <input id="password" type="password" id="exampleInputPassword1" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="d-flex justify-content-between align-items-center mx-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> --}}
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>


                        <button type="submit" class="btn w-75 mt-2 submit-btn">
                            {{ __('Login') }}
                        </button>

                                        </form>                </div>
            </div>
        </div>
    </div>
    <!-- Jquery bootstrap script -->
@endsection
