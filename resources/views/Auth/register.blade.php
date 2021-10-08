@extends('Auth.layout')

@section('log')

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="{{ route('register') }}" method="POST" class="login100-form validate-form">
                @csrf
                <span class="login100-form-title p-b-26">
                    SignUp
                </span>
                
                @error('name')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100 ">
                    <input class="input100" type="text" name="name" id="name" placeholder="Enter Full Name"
                    value="{{ old('name') }}">
                    
                </div>
                @error('age')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100 ">
                    <input class="input100" type="text" name="age" id="age" placeholder="Enter Age"
                    value="{{ old('age') }}">
                    
                </div>

                @error('email')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100 ">
                    <input class="input100" type="text" name="email" id="email" placeholder="Enter Email"
                    value="{{ old('email') }}">
                    
                </div>
                {{-- dwd --}}
                @error('password')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100">
                    <input class="input100" type="password" name="password" id="password" placeholder="Enter Password">
                    
                </div> 

                @error('password_confirmation')
                    <h6 style="color:red;">{{ $message }}</h6>
                @enderror
                <div class="wrap-input100">
                    <input class="input100" type="password" name="password_confirmation" placeholder="ReEnter Password">
                    
                </div>
                

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Sign Up
                        </button>
                    </div>
                </div>

                <div class="text-center p-t-115">
                    <span class="txt1">
                        Have an account?
                    </span>

                    <a class="txt2" href="{{ route('login') }}">
                        Sign In
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
@endsection
