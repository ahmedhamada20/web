<!doctype html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="fixed-left">
@include('admin.layouts.preloader')
<div id="wrapper" style="font-family: 'Cairo', serif; font-optical-sizing: auto; font-weight: 400; font-style: normal;">
    @include('admin.layouts.sidebar')
    <div class="content-page">
        <div class="content">
            @include('admin.layouts.header')
            @yield('content')
        </div>
        @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.footerjs')
</div>
</body>
</html>
