<!doctype html>
<html lang="en">
<head>
    @include('includes.meta')
    <title>@yield('title')</title>
    @include('includes.style')
</head>
<body>
@include('includes.header')
@yield('body')
@include('includes.footer')
@include('includes.script')
</body>
</html>
