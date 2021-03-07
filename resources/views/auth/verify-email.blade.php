@extends('auth.layout')
@section('content')
<div class="">
    <!-- Welcome Text -->
    <div class="welcome-text">
        <h3>An email with a link has been sent to your account.</h3>
        <h3>click the link to verify your email address</h3>

<form method="POST" id="verify-email-form" action="/email/verification-notification">
    @csrf
    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Resend <i class="icon-material-outline-arrow-right-alt"></i></button>
    
</form>
@endsection
@section('titlebar')
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Verify email</h2>

                <!-- Breadcrumbs -->
                <nav id="breadcrumbs" class="dark">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>email</li>
                        <li> verify<li/>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</div>
@endsection
