<nav class="main-nav--bg">
    <div class="container main-nav">
        <div class="main-nav-start">
            <div class="search-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-search" aria-hidden="true">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" placeholder="Enter keywords ..." required="">
            </div>
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

