<nav class="main-nav--bg">
    <div class="container main-nav">
        <div class="main-nav-start">
        </div>
        <div class="main-nav-end">
            <span class="hello">Hello</span>
            <button type="button" class="btn btn-light" onclick="redirectToLogin()">Log Out</button>
        </div>
    </div>
</nav>
@section('afterScripts')
    <script>
        let user = JSON.parse(sessionStorage.getItem('user'));
        $('.hello').text(user['full_name']);
    </script>
@endsection

