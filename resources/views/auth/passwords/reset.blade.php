@extends('user.layout.default')
@section('content')
    <div class="container-fluid pl-0">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12 d-none d-lg-block">
                <div class="signup-logo-side">

                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-6 px-2 px-sm-5  py-5 ">
                <div class="signup-form-side mx-2 mx-lg-1 mx-xl-5 my-5 text-center">
                    <div class="login-logo d-flex justify-content-center mx-auto">
                        <img src="{{asset('/img/logo.png')}}" />
                    </div>
                    <h2>{{ __('Reset Password') }}</h2>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group mt-4">
                            {{-- <input type="email" class="form-control"  placeholder="Enter email"> --}}

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>

                        <div class="form-group mt-4">

                            {{-- <input type="email" class="form-control"  placeholder="Enter email"> --}}
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>
                        <div class="form-group mt-4">
                            {{-- <input type="email" class="form-control"  placeholder="Enter email"> --}}

                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>

                                        </form>                </div>
            </div>
        </div>
    </div>
    <!-- Jquery bootstrap script -->
@endsection
