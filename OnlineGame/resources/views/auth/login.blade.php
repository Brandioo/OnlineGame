<? php ?>
@extends('layouts.auth')

@section('bottomHead')
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

            <form id="forma" method="post">
                <div class="form-group">
                    @csrf
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
