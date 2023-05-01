<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    @include('frontend.includes.css')
</head>

<body>
@include('frontend.includes.header')

@include('frontend.includes.navbar')

@yield('carosel')



@include('frontend.includes.fullsearch')



@yield('body')

@include('frontend.includes.footer')


@include('frontend.includes.js')
</body>

</html>

