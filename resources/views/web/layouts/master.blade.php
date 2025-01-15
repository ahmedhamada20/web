<!doctype html>
<html lang="en">
<head>
    @include('web.layouts.head')
</head>
<body class="{{ App::getLocale() === 'ar' ? 'rtl' : '' }}">

<div class="boxed_wrapper">
    @include('web.layouts.preloader')
    @include('web.layouts.header')
    @include('web.layouts.Mobile')
    @yield('content')
    @include('web.layouts.footer')
</div>
@include('web.layouts.footerjs')
</body>
</html>
