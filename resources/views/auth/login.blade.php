@extends('auth.layout')
@section('content')
<div class="">
    <!-- Welcome Text -->
    <div class="welcome-text">
        <h3>We're glad to see you again!</h3>
    <span>Don't have an account? <a href="{{route('register')}}">Sign Up!</a></span>
    </div>
        
    <!-- Form -->
    <form method="post" id="login-form">
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
        <div class="input-with-icon-left">
            <i class="icon-material-outline-lock"></i>
            <input type="password" value="{{old('password')}}" class="input-text with-border @error('password') with-border-danger @enderror" name="password" id="password" placeholder="Password" required/>
        </div>
        @error('password')
        <div class="notification error ">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror

        <a href="/forgot-password" class="forgot-password">Forgot Password?</a>
    </form>
    
    <!-- Button -->
    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
    
    <!-- Social Login -->
</div>

@endsection

@section('titlebar')
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Log In</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Log In</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection

