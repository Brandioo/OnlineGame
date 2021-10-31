<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
    @yield('afterStyles')
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>

{{--    @include('s')--}}
</body>
</html>
