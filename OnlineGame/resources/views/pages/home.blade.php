@include('partials.head')

@section('content')
 <div class="display-flex justify-content-center" style="margin: 15rem 20rem">
    <div class="card text-center">
        <div class="card-header" style="font-size: 24px; font-weight: 600;">
            Welcome
        </div>
        <div class="card-body">
            <p class="card-text" style="font-size:18px">Click to register or log in!</p>
            <div class="display-flex justify-content-around" style="font-size: 20px">
                <a href="{{ url('/register') }}" class="btn btn-primary mx-5">Register</a>
                <a href="{{ url('/login') }}" class="btn btn-primary mx-5">Login</a>
            </div>
        </div>
    </div>
 </div>


