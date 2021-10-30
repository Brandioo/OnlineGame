<?php?>
@extends('layout.auth')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('login') }}"> Back </a>
            </div>
        </div>
    </div>
    <style>
        .container {
            max-width: 450px;
        }

        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Add Customers
        </div>

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
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password"/>
                </div>
                <div class="form-group" form="forma">
                    <label for="role">Choose a Role:</label>
                    <select onchange="changeRole()" id="roleSelect" name="role" form="forma">
                        <option value="customer">customer</option>
                        <option value="employee">employee</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Create User</button>
            </form>
        </div>
    </div>
@endsection
<script>

    function changeRole() {

        var selected = document.getElementById('roleSelect').value;
        if (selected === 'customer') {
            document.getElementById('customerDiv').style.display = 'block';
            document.getElementById('agencyDiv').style.display = 'none';
        } else {
            document.getElementById('agencyDiv').style.display = 'block';
            document.getElementById('customerDiv').style.display = 'none';
        }
    }
</script>
