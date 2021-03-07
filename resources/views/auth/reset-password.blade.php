@extends('auth.layout')
@section('content')
<div class="">
    <!-- Welcome Text -->
    <div class="welcome-text">
        <h3>Reset Your password using email</h3>
    <span>Don't have an account? <a href="{{route('register')}}">Sign Up!</a></span>
    </div>
    @if (session('status'))
    <div class="notification success ">
        <p>
            {{ session('status') }}
        </p>
    </div>
@endif
    <!-- Form -->
    <form method="POST" id="password-reset-form" action="/forgot-password">
        @csrf
    <div class="input-with-icon-left">
            <i class="icon-material-baseline-mail-outline"></i>
        <input type="text" value="{{old('email')}}" class="input-text with-border @error('email') with-border-danger @enderror" name="email" id="email" placeholder="Email Address" required/>
        </div>
        @error('email')
        <div class="notification error">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
    <input type="text" value="{{request()->route('token')}} " name="token" hidden/>
        <div class="input-with-icon-left">
            <i class="icon-material-outline-lock"></i>
            <input type="password" value="{{old('password')}}" class="input-text with-border @error('password') with-border-danger @enderror" name="password_confirmation" id="password" placeholder="Password" required/>
        </div>
        @error('password')
        <div class="notification error ">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror

        <div class="input-with-icon-left">
            <i class="icon-material-outline-lock"></i>
            <input type="password" value="{{old('password')}}" class="input-text with-border @error('password') with-border-danger @enderror" name="password" id="password" placeholder="Confirm Password" required/>
        </div>
        @error('password')
        <div class="notification error ">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
        <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Reset <i class="icon-material-outline-arrow-right-alt"></i></button>
        
    </form>
    
    <!-- Button -->
   
    
    <!-- Social Login -->
</div>
@endsection
@section('titlebar')
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Reset password</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>reset-password</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection
