<!DOCTYPE html>
<html>
<head>
    @include('partials.head')
    <link href="{{ asset('assets/css/mainpage.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/header.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/footer.css')}}" rel="stylesheet">
    @yield('afterStyles')
    {{--    We set this '@' if we want to set other codes in middle of partials.head and '@yield'--}}
</head>
<body>

<div class="page-flex">
    @include('partials.sidebar')

    <div class="main-wrapper">
        {{--Header--}}
        @include('partials.header')
                @yield('content')

        {{--Footer--}}
        @include('partials.footer')
    </div>
</div>
@include('partials.scripts')
{{--    We set this '@' if we want to set other codes in middle of partials.head and '@yield'--}}
@yield('afterStyles')
<input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px;
left: 0px; height: 0px; width: 0px;">
</body>
</html>
