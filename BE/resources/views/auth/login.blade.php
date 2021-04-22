{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ID_karyawan" class="col-md-4 col-form-label text-md-right">{{ __('ID karyawan') }}</label>

                            <div class="col-md-6">
                                <input id="ID_karyawan" type="ID_karyawan" class="form-control @error('ID_karyawan') is-invalid @enderror" name="ID_karyawan" value="{{ old('ID_karyawan') }}" required autocomplete="ID_karyawan" autofocus>

                                @error('ID_karyawan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rini's Restaurant</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>
    
    <div class="login-section">
        <div class="logo-img"><img src="{{asset('assets/logo.svg')}}" alt=""></div>

        <form  class="login-form" action="{{ route('login') }}" method="post">
            @csrf
                <div>
                    <label class="text-regular" for="id">Employee ID</label>
                    <input class="text-regular" type="number" name="id" id="id">
                    <div>
                        @if (session('error'))
                            <div>{{ session('error') }}</div>
                        @endif
                    </div>
                </div>
                <div>
                    <label class="text-regular" for="">Password</label>
                    <input class="text-regular" type="password" name="password" id="password">
                    <div>
                        @if (session('error'))
                            <br>
                        @endif
                    </div>
                </div>
                <button class="text-regular login-button button-long">Login</button>
        </form>
    </div>
    

    <div class="signup-section">
        <div class="left-img"><img src="{{asset('assets/burger.svg')}}" alt=""></div>
        <div class="right-container">
            <div class="text-big-bold">Create an Account</div>

            <form class="signup-form" action="{{ route('register') }}" method="post">
                @csrf
                <input class="text-regular input-text" type="text" name="name" id="name" placeholder="Full Name">
                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
                <input class="text-regular input-text" type="number" name="id" id="id" placeholder="Employee ID">
                {{-- @error('id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
                <input class="text-regular input-text" type="password" name="password2" id="password2" placeholder="Password">
                {{-- @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
                <input class="text-regular input-text" type="password" name="password_confirmation" id="confirmPassword" placeholder="Confirm Password">
                <div class="radio-wrap">
                    <div class="radio-input">
                        <input name="gender" type="radio" value="man">
                        <label class="text-regular" for="gender">Man</label>
                    </div>
                    <div class="radio-input">
                        <input name="gender" type="radio" value="woman">
                        <label class="text-regular" for="gender">Woman</label>
                    </div>
                </div>
                {{-- @error('gender')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
                <button class="text-regular signup-button button-long" type="submit">Create Account</button>
            </form>
        </div>
        
    </div>

    <script type="text/javascript" src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <!-- jquery validate plugin -->
    <script type="text/javascript" src="{{asset('js/jquery-validate-plugin/dist/jquery.validate.js')}}"></script>

</body>
</html>
