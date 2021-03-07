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
        
    </form>
    
    <!-- Button -->
    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">submit <i class="icon-material-outline-arrow-right-alt"></i></button>
    
    <!-- Social Login -->
</div>
@endsection
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Forgot password</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Forgot password</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
