<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
</head>
<body>

    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.scripts')
</body>
</html>
