<html>
<head>
    <title>Nama Aplikasi - @yield('title')</title>
</head>
{{--@yield('header')--}}
{{--@yield('content')--}}

@section('header')
    <h1>Default Header</h1>
@show
@section('content')
    <p>Default Content</p>
@show
</html>
