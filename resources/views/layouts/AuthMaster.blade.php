<!doctype html>
<html lang="en">
<head>
    @include('partials.admin.meta')
</head>
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    @yield('content')

    @include('partials.admin.footer')
    @include('partials.admin.scripts')
</div>
</body>
</html>
