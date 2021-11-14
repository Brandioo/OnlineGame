@extends('layouts.auth')

@section('bottomHead')
    <link href="{{ asset('assets/css/register.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="push-top">
                <h2 style="text-align: center">GET STARTED</h2>
                <p>Start Creating The Best Possible User Experience For You.</p>
            </div>
        </div>
    </div>

    <style>
        .push-top {
            margin-top: 50px;
        }

        .container {
            max-width: 450px;
        }
    </style>

    <div class="card push-top">
        <div class="card-body">
            <div class="alert alert-danger error" style="display: none;">
                <p class="alert__main"></p>
            </div>
            <br/>

            <form id="registerForm" method="post">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name"/>
                    <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name"/>
                    <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="birthday">Birthday</label>
                    <input type="date" class="form-control" name="birthday"/>
                    <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"/>
                    <span class="error"></span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"/>
                    <span class="error"></span>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <div class="pull-right mt-3">
                    <span> Already registered?</span>
                    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('afterScripts')
    <script>

        isTokenPresent();

        $(document).ready(function () {
            $("#registerForm").submit(function (event) {
                event.preventDefault();



                $.ajax({
                    type: "POST",
                    url: base_api_url + "/register",
                    beforeSend: function(request) {
                        request.setRequestHeader("Accept", 'application/json');
                        request.setRequestHeader("'Content-Type'", 'application/json');

                        $('.error').hide();
                        $('.error').siblings('input').removeClass('is-invalid');
                    },
                    data: $(event.currentTarget).serializeArray(),
                    dataType: "json",
                    encode: true,
                    success: function (data) {
                        console.log(data);
                        alert('You have been successfully registered!');
                        sessionStorage.setItem('token', data.access_token);
                        window.location = `${base_url}/dashboard`
                    },
                    error: function (xhr) {

                        $('.alert.alert-danger').show();
                        $('.alert p.alert__main').text(xhr.responseJSON.message);

                        if(xhr.responseJSON.errors) {
                            $.each(xhr.responseJSON.errors, function (key, valueAsArray) {
                                $(`input[name=${key}]`).addClass('is-invalid');
                                $(`input[name=${key}]`).siblings('span.error').text(valueAsArray.join("\n")).show();
                            })
                        }
                    }
                }).done(function (data) {
                    console.log(data);
                });


            });
        });
    </script>
@endsection


