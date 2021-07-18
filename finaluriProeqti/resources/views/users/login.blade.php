@extends('Layout.app')
@section('content')
<style>
    body {
               font-family: "Lato", sans-serif;
           }

    .main-head{
        height: 150px;
        background: #FFF;

    }

    .sidenav {
        height: 100%;
        background-color: #000;
        overflow-x: hidden;
        padding-top: 20px;
    }


    .main {
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
    }

    @media screen and (max-width: 450px) {
        .login-form{
            margin-top: 10%;
        }

        .register-form{
            margin-top: 10%;
        }
    }

    @media screen and (min-width: 768px){
        .main{
            margin-left: 40%;
        }

        .sidenav{
            width: 40%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
        }

        .login-form{
            margin-top: 60%;
        }

        .register-form{
            margin-top: 20%;
        }
    }


    .login-main-text{
        margin-top: 30%;
        padding: 60px;
        color: #fff;
    }

    .login-main-text h2{
        font-weight: 300;
    }

    .btn-black{
        background-color: #000 !important;
        color: #fff;
    }

</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    <div class="login-main-text">
        <h2>Application<br> Login Page</h2>
        <p>Login or register from here to access.</p>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form method="POST" action="{{route('users.login')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input name="email" type="email" class="form-control @error ('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        @error('email')
                        <p class="text-danger">{{$errors->first('email')}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input name="password" type="password" class="form-control @error ('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                        @error('password')
                        <p class="text-danger">{{$errors->first('password')}}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                    <button type="button" class="btn btn-primary">
                        <a href="{{route('users.register.index')}}" style="color: white; text-decoration: none">
                            Register
                        </a>
                    </button>
                </form>
        </div>
    </div>
</div>

@endsection
