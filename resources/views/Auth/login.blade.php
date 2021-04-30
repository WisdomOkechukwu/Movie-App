@extends('Auth.layout')

@section('log')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ route("login") }}" method="POST" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-26">
                    Welcome
                </span>

                @if (session('status'))
                <h6 style="color:red;">{{ session('status') }}</h6> 
                @endif
                @error('email')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100">
                    <input class="input100" type="text" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                   
                </div>
                {{-- dwd --}}

                @error('password')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100">
                    <input class="input100" type="password" name="password" placeholder="Enter Password" value="{{ old('email') }}">
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Don’t have an account?
                    </span>

                    <a class="txt2" href="{{ route('register') }}">
                        Sign Up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
@endsection
