@extends('layouts.app')

@section('content')

<body>
    <div id="containerBody" class="container text-center">
        <div class="row">
            <div class="col" id="left">
                <!-- get the landing-page.png using image asset -->
                <img class="img-fluid" src="{{ asset('assets/landing-page.png') }}" alt="landing-page">
            </div>
            <div class="col" id="right">
                <h2 style="margin-top: 15%">Welcome back to</h2>
                <h1 style="margin-top: -3%; color: #167860; font-size: 82px; font-weight: bold">V O X</h1>
                <center>
                <div class="form-floating mb-3 align-items-center" style="width:70%">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating align-items-center" style="width:70%">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="row" style="width: 70%; margin: 2%">
                <div class="col-6">
                <div class="form-check">
                    <input style="margin-left: -21%" class="form-check-input" type="checkbox" value="" id="defaultCheck1" >
                    <label style="margin-left: -20%" class="form-check-label" for="defaultCheck1">Remember me</label>
                </div>
                </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        <a href="{{ route('forgetpassword') }}" style="color: #1FAB89; text-decoration: none">Forgot password?</a>
                    </div>
                </div>

                <a href="{{ route('login') }}">
                    <button style="margin-top: 5%;  background-color: #1FAB89; width: 70%; border: none; color: white; padding: 12px 24px; text-align: center; font-size: 16px; cursor: pointer; border-radius: 8px;">Login</button>
                </a>
                

                <p style="margin-top: 5%; font-size: 16px">Don't have an account? <a href="{{ route('register') }}" style="color: #1FAB89; text-decoration: none">Register</a></p>


            </center>
            </div>
</body>

@endsection