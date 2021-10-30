<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
    @include('partials.header')
    @yield('afterScripts')
    {{--    We set this '@' if we want to set other codes in middle of partials.head and '@yield'--}}
</head>
<body>
    <div class="container mt-4">
        @yield('content')
    </div>

    @include('partials.scripts')
    @include('partials.footer')
    @yield('afterScripts')
    {{--    We set this '@' if we want to set other codes in middle of partials.head and '@yield'--}}
</body>

</html>
