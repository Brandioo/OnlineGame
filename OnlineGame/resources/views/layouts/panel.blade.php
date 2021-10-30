<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
    @yield('afterStyles')
    {{--    We set this '@' if we want to set other codes in middle of partials.head and '@yield'--}}
</head>
<body>

<div class="container mt-4">
    @yield('content')
</div>

@include('partials.scripts')
    {{--    We set this '@' if we want to set other codes in middle of partials.head and '@yield'--}}
@yield('afterStyles')
</body>
</html>
