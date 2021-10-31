@extends('layouts.auth')

@section('afterStyles')
    <link href="{{ asset('assets/css/auth.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="push-top">
                <h2 style="text-align: center">Welcome Back!</h2>
                <p class="p">Sign in in to your account to continue.</p>
            </div>
        </div>
    </div>
    <style>
        .p {
            text-align: center;
        }

        .container {
            max-width: 450px;
        }

        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif

            <form id="loginForm">
                <div class="form-group">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password"/>
                        <p>Remember me next time</p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('afterScripts')
    <script>
        $(document).ready(function () {
            $("#loginForm").submit(function (event) {
                event.preventDefault();

                var formData = {
                    email: $("input[name=email]").val(),
                    password: $("input[name=password]").val(),
                };

                $.ajax({
                    type: "POST",
                    url: "http://localhost:8000/api/login",
                    beforeSend: function(request) {
                        request.setRequestHeader("Accept", 'application/json');
                        request.setRequestHeader("'Content-Type'", 'application/json');
                    },
                    data: formData,
                    dataType: "json",
                    encode: true,
                    success: function (data) {
                        console.log(data);
                        alert('succes');
                    },
                    error: function (xhr) {
                        alert('error');
                    }
                }).done(function (data) {
                    console.log(data);
                });


            });
        });
    </script>
@endsection
