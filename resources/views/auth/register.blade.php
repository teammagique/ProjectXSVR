@extends('auth.layout')
@section('content')
<div class="login-register-page">
    <!-- Welcome Text -->
    <div class="welcome-text">
        <h3 style="font-size: 26px;">Let's create your account!</h3>
        <span>Already have an account? <a href="pages-login.html">Log In!</a></span>
    </div>

   
    <!-- Form -->
    <form method="post" id="register-account-form" action="/register">
        @csrf
         <!-- Account Type -->
    <div class="account-type">
        <div>
            <input type="radio" name="account-type" value='freelancer'id="freelancer-radio" class="account-type-radio" checked/>
            <label for="freelancer-radio" class="ripple-effect-dark"><i class="icon-material-outline-account-circle"></i> Freelancer</label>
        </div>

        <div>
            <input type="radio" name="account-type-radio" value="employer" id="employer-radio" class="account-type-radio"/>
            <label for="employer-radio" class="ripple-effect-dark"><i class="icon-material-outline-business-center"></i> Employer</label>
        </div>
    </div>
        
        <div class="input-with-icon-left">
            <i class="icon-material-baseline-mail-outline"></i>
        <input type="text" value="{{old('email')}}" class="input-text with-border @error('email') with-border-danger @enderror" name="email" id="emial" placeholder="Email Address" />
        </div>
        @error('email')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
        <div class="input-with-icon-left">
            <i class="icon-line-awesome-tty"></i>
            <input type="number" value="{{old('phone_number')}}" class="input-text with-border @error('phone_number') with-border-danger @enderror" name="phone_number" id="phone_number" placeholder="Phone Number" />
        </div>
        @error('phone_number')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
        <div class="input-with-icon-left">
            <i class="icon-feather-user"></i>
            <input type="text" value="{{old('first_name')}}" class="input-text with-border @error('first_name') with-border-danger @enderror" name="first_name" id="first_name" placeholder="first name" />
        </div>
        @error('first_name')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
        <div class="input-with-icon-left">
            <i class="icon-feather-user"></i>
            <input type="text" value="{{old('surname')}}" class="input-text with-border @error('surname') with-border-danger @enderror" name="surname" id="surname" placeholder=" Surname"/>
        </div>
        @error('surname')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
        <div class="input-with-icon-left">
            <i class="icon-feather-user-plus"></i>
            <input type="text" value="{{old('other_names')}}" class="@error('other_names') with-border-danger @enderror  input-text with-border" name="other_names" id="other_names" placeholder="Other names"/>
        </div>
        @error('other_names')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror

        <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
            <i class="icon-material-outline-lock"></i>
            <input type="password" value="{{old('password')}}" class="input-text  with-border @error('password') with-border-danger @enderror" name="password" id="password" placeholder="Password" />
        </div>
        @error('password')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror

        <div class="input-with-icon-left">
            <i class="icon-material-outline-lock"></i>
            <input type="password" value="{{old('password_confirmation ')}}"class="input-text with-border @error('password') with-border-danger @enderror" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" />
        </div>
        @error('password')
        <div class="notification error closeable">
        <p>{{$message}}</p>
            <a class="close" href="#"></a>
        </div>
        @enderror
        <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">Register <i class="icon-material-outline-arrow-right-alt"></i></button>
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

                <h2>Register</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Register</li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection
